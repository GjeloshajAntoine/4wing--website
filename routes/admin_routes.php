<?php
// ADMIN ROUTE
$f3->route('GET /admin',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('is_admin',is_admin());
    echo Template::instance()->render('admin_views/home.php');
  });
});

$f3->route('GET /admin/login',function ($f3,$params) {
  echo Template::instance()->render('admin_views/login.php');
});
$f3->route('POST /admin/login',function ($f3,$params) {
  $name=$_POST['name'];
  $password=$_POST['password'];

  if (connect($name,$password)) {
    $f3->reroute('/admin');
  }else {
    $f3->reroute('/admin/login');
  }
});

//page admin traduction

$f3->route('GET /admin/list_page_trad',function ($f3) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('pageliste',get_page_trad_list());
    echo Template::instance()->render('admin_views/page_list.php');
  });
});

$f3->route('GET /admin/tradpage/@pagename/@lg',function ($f3,$params) {
  //include 'model/page.php';
  is_connected_with(false,$f3,function($f3){
    $all_trad=get_trad_page($f3->PARAMS['pagename'],$f3->PARAMS['lg']);
    $f3->set('all_trad',$all_trad);
    $f3->set('lg',$f3->PARAMS['lg']);
    $f3->set('pagename',$f3->PARAMS['pagename']);
    $f3->set('breadcrumb',['pages'=>'/admin/list_page_trad']);
    $f3->set('active',$f3->PARAMS['pagename']);
    echo Template::instance()->render('admin_views/page_trad.php');
  });

});
$f3->route('GET /admin/tradpage/@pagename',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->reroute('/admin/tradpage/@pagename/fr');
  });
});

$f3->route('POST /admin/page_trad_changes/@pagename/@lg',function ($f3,$params) {
    //include 'model/page.php';
    is_connected_with(false,$f3,function($f3){
      print_r($_POST);
      set_trad_page($_POST);//passe les donner du formulaire sous forme [id=>trad]
      $f3->reroute('/admin/tradpage/@pagename/@lg');//reprends les donnée GET directement depuis l'adresse grace à f3 pour la redirection
    });
});

// PROJECT ADMIN ROUTE


//User
$f3->route('GET /admin/user/profil',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set("all_users",list_user());
    echo Template::instance()->render('admin_views/user_list.php');
  });
});
$f3->route('GET /admin/user/list',function ($f3,$params) {
  is_connected_with(true,$f3,function($f3){
    $f3->set("all_users",list_user());
    echo Template::instance()->render('admin_views/user_list.php');
  });
});
$f3->route('GET /admin/user/new',function ($f3,$params) {
  is_connected_with(true,$f3,function($f3){
    echo Template::instance()->render('admin_views/user_new.php');
  });
});
$f3->route('POST /admin/user/change_auth',function ($f3,$params) {
  is_connected_with(true,$f3,function($f3){

  });
});
$f3->route('POST /admin/user/recreate_password',function ($f3,$params) {
  is_connected_with(true,$f3,function($f3){

  });
});

//Citation
$f3->route('GET /admin/citation/list',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('all_citations',list_all_citation());
    $f3->set('lg',$f3->PARAMS['lg']);

    echo Template::instance()->render('admin_views/citation_list.php');
  });
});
$f3->route('GET /admin/citation/list/@lg',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('all_citations',list_citation($f3->PARAMS["lg"]));
    $f3->set('lg',$f3->PARAMS["lg"]);
    echo Template::instance()->render('admin_views/citation_list.php');
  });
});
$f3->route('GET /admin/citation/list/@lg/@cat',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){

    echo Template::instance()->render('citation_list.php');
  });
});
$f3->route('GET /admin/citation/@id',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('citation',citation_id($f3->PARAMS['id']));
    $f3->set('breadcrumb',['citations'=>'/admin/citation/list/fr']);

    echo Template::instance()->render('admin_views/citation_edit.php');
  });
});
$f3->route('POST /admin/citation/edit/data',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $id=edit_citation($_POST['id'],$_POST['citation'],$_POST['auteur'],$_POST['lg'],$_POST['cat']);
    $f3->reroute('/admin/citation/'.$_POST['id']);
  });
});
$f3->route('GET /admin/citation/new/form',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    echo Template::instance()->render('admin_views/citation_new.php');
  });
});
$f3->route('POST /admin/citation/new/data',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $id=add_citation($_POST['citation'],$_POST['auteur'],$_POST['lg'],$_POST['cat']);
    $f3->reroute('/admin/citation/'.$id);
  });
});




//page FAQ quetion teste
//page FAQ quetion

$f3->route('GET /faq',function ($f3) {
  $f3->set('message','plus fréquement posées.');
  $f3->set('title','Les questions les');
  $f3->set('LANGUAGE','en');
});
//$f3->route('GET /faq',function ($f3) {
  //$f3->set('message','plus fréquement posées.');
 //$f3->set('title','Les questions les');


//$f3->set('qaf',get_page_faq());
//var_dump(get_page_faq());

 // $template=new Template;
  //echo $template->render('pagefaq.html');
//});



//page FAQ quetion reel origi

//$f3->route('GET /Views/faq',function ($f3) {
  // $f3->set('message','plus fréquement posées.');
  // $f3->set('title','Les questions les');



   //$f3->set('paf',get_faq());
   //var_dump(get_faq());

   //$template=new Template;
  // echo $template->render('Views/faq.php');
 //});





//page FAQ quetion reel

$f3->route('GET /Views/faq',function ($f3) {
    $f3->set('paf',get_faq());
     $f3->set('message','plus fréquement posées.');
     $f3->set('title','Les questions les');
  //var_dump(get_faq());


  $template=new Template;
  echo $template->render('Views/faq.php');
});


 ?>
