<?php
session_start();
include 'model/db_init.php';
include 'model/user.php';
include "model/page.php";
include 'model/project.php';
include 'model/citation.php';

function traduction() {
  return ["title"=>"The TITLE","message"=>"The mésséidge"];
}
$f3 = require('fatfree/lib/base.php');
include "traduction_function.php";

$f3->route('GET /',
    function() {
        echo 'Hello,!';
    }
);
$f3->route('GET /test',function ($f3) {

  $f3->set('name','ça marche');
  //echo \Template::instance()->render('page.htm');
  $template=new Template;
  echo $template->render('page.htm');

});
$f3->route('GET /coucou',function ($f3) {
  $f3->set('message','ça marche');
  $f3->set('title','Le titre');
  $f3->set('LANGUAGE','en');

  //echo \Template::instance()->render('page.htm');
  $template=new Template;
  echo $template->render('page 2.html');
});
$f3->route('GET /@lg/page3',function ($f3,$params) {
  echo $params['lg'];
});
$f3->route('GET /@lg/vraipage',function ($f3,$params) {
  $page_name="vraipage";

  traduction_page($page_name,$params['lg'],$f3);


  $template=new Template;
  echo $template->render('vraipage.html');
});
$f3->route('GET /@lg/mission',function ($f3,$params) {
  echo $params['lg'];
  hazard_citation($params['lg'],false);
});
$f3->route('GET /@lg/health',function ($f3,$params) {
  echo $params['lg'];
  hazard_citation($params['lg'],'health');

});
$f3->route('GET /@lg/selectionProjet',function ($f3,$params) {
  echo $params['lg'];
  hazard_citation($params['lg'],false);

});
$f3->route('GET /@lg/techEducation',function ($f3,$params) {
  echo $params['lg'];
  hazard_citation($params['lg'],'techEducation');
});
$f3->route('GET /@lg/valeurs',function ($f3,$params) {
  echo $params['lg'];
});


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
  $name=params['name'];
  $password=$params['password'];

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
    echo Template::instance()->render('Views/list_page_trad.html');
  });
});

$f3->route('GET /admin/tradpage/@pagename/@lg',function ($f3,$params) {
  //include 'model/page.php';
  is_connected_with(false,$f3,function($f3){
    $all_trad=get_trad_page($params['pagename'],$lg);
    $f3->set('all_trad',$all_trad);
    $f3->set('lg',$lg);
    $f3->set('pagename',$params['pagename']);
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
$f3->route('GET /admin/list_projet',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('all_projects',Project::get_all_projects());
    echo Template::instance()->render('admin_views/projet_list.php');
  });
});
$f3->route('GET /admin/projet/@id',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->reroute('/admin/projet/@id/info');
  });
});
$f3->route('GET /admin/projet/@id/info',function ($f3,$params) {//info principales nom,catégories
  is_connected_with(false,$f3,function($f3){
    $f3->set('project',Project::get_info($params['id']));
    echo Template::instance()->render('admin_views/');
  });
});
$f3->route('GET /admin/projet/@id/trad/@lg',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('all_trad',Project::get_trad($params['id'],$params['lg']));
    echo Template::instance()->render('admin_views/project_trad');
  });
});
$f3->route('POST /admin/projet/@id/info/editdata',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->reroute('/admin/projet/@id/info');
  });
});
$f3->route('POST /admin/projet/@id/trad/@lg/editdata',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->reroute('/admin/projet/@id/trad/@lg');
  });
});

$f3->route('GET /admin/projet/create',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    echo Template::instance()->render('admin_views/project_new.php');
  });
});
$f3->route('POST /admin/projet/create_data',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $project=new Project;
    $id=$project->create($_POST['name']);
    $f3->set('id',$id);
    $f3->reroute('/admin/projet/@id/info');
  });
});

$f3->route('GET /admin/projet/@id/images/list',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    echo Template::instance()->render('admin_views/');
  });
});
$f3->route('POST /admin/projet/@id/image/add',function ($f3,$params) {
  //is_connected_with(false,$f3,function($f3){
     Project::add_image_to_id($params['id'],$_FILES['file']);
    echo Template::instance()->render('admin_views/');
  //});
});



$f3->route('GET /admin/list_user',function ($f3,$params) {
  is_connected_with(true,$f3,function($f3){
    echo Template::instance()->render('Views/');
  });
});
$f3->route('POST /admin/user/create',function ($f3,$params) {
  is_connected_with(true,$f3,function($f3){
    echo Template::instance()->render('Views/');
  });
});

$f3->route('GET /admin/citation/list',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    echo Template::instance()->render('Views/');
  });
});
$f3->route('GET /admin/citation/list/@lg/@cat',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    echo Template::instance()->render('Views/');
  });
});
$f3->route('GET /admin/citation/new/form',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    echo Template::instance()->render('Views/');
  });
});
$f3->route('POST /admin/citation/new/cdata',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    echo Template::instance()->render('Views/');
  });
});

//on va bientot voire le bout du tunel !!!

$f3->run();



?>
