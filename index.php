<?php

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
});
$f3->route('GET /@lg/health',function ($f3,$params) {
  echo $params['lg'];
});
$f3->route('GET /@lg/selectionProjet',function ($f3,$params) {
  echo $params['lg'];
});
$f3->route('GET /@lg/techEducation',function ($f3,$params) {
  echo $params['lg'];
});
$f3->route('GET /@lg/valeurs',function ($f3,$params) {
  echo $params['lg'];
});
$f3->route('GET /admin',function ($f3,$params) {
  //echo $params['lg'];
  //TODO connection admin !!
});



//page admin traduc

$f3->route('GET /admin/list_page_trad',function ($f3) {
  include "model/page.php";

//var_dump(get_page_trad_list());

  $f3->set('pageliste',get_page_trad_list());
  echo Template::instance()->render('Views/list_page_trad.html');



});


$f3->route('GET /admin/tradpage/@pagename',function ($f3,$params) {

});
$f3->run();
