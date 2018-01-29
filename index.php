<?php
session_start();

include 'model/user.php';
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
    echo Template::instance()->render('Views/admin.html');
  });
});

$f3->route('GET /admin/login',function ($f3,$params) {
  //TODO connection admin !!
  echo Template::instance()->render('Views/admin.html');
});

//page admin traduction

$f3->route('GET /admin/list_page_trad',function ($f3) {
  include "model/page.php";
  is_connected_with(false,$f3,function($f3){
    $f3->set('pageliste',get_page_trad_list());
    echo Template::instance()->render('Views/list_page_trad.html');
  });
});

$f3->route('GET /admin/tradpage/@pagename/@lg',function ($f3,$params) {
  include 'model/page.php';
  if (!isset($params['lg'])) {
    $lg="fr";
  }else{
    $lg=$params['lg'];
  }
  $all_trad=get_trad_page($params['pagename'],$lg);
  $f3->set('all_trad',$all_trad);
  $f3->set('lg',$lg);
  $f3->set('pagename',$params['pagename']);


$f3->route('GET /admin/tradpage/@pagename',function ($f3,$params) {


  echo \Template::instance()->render('Views/traductions_list_page.html');
  //print_r($all_trad);
  for ($i=0; $i <count($all_trad) ; $i++) {
    echo "<br/>";
    echo "id:".$all_trad[$i]['id']." string_origin: ".$all_trad[$i]['string_origin']." trad :".$all_trad[$i]['string_trad'];
  }
});

$f3->route('POST /admin/page_trad_changes/@pagename/@lg',function ($f3,$params) {
    include 'model/page.php';
    print_r($_POST);
    set_trad_page($_POST);
    $f3->reroute('/admin/tradpage/@pagename/@lg');
});


$f3->route('GET /admin/list_projet',function ($f3,$params) {

});
$f3->route('GET /admin/projet/@id',function ($f3,$params) {

});
$f3->route('POST /admin/projet/@id/editdata',function ($f3,$params) {

});
$f3->route('GET /admin/projet/create',function ($f3,$params) {

});
$f3->route('POST /admin/projet/create_data',function ($f3,$params) {

});
$f3->route('POST /admin/projet/upload_test',function ($f3,$params) {
    echo "TEST";
    echo $_FILES['file']['name'];
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

$f3->run();


//on va bientot voire le bout du tunel !!!
