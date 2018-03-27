<?php
session_start();
include 'variables.php';
include 'model/db_init.php';
include 'model/user.php';
include "model/page.php";
include 'model/project.php';
include 'model/citation.php';
include 'model/db_faq.php';
include 'model/Upload_Image.php';
include "traduction_function.php";


function traduction() {
  return ["title"=>"The TITLE","message"=>"The mésséidge"];
}
$f3 = require('fatfree/lib/base.php');
$f3->set('ESCAPE',FALSE);
$f3->set("subrootpath",$GLOBALS["subrootpath"]);


$f3->route('GET /',
    function() {
        echo 'Hello,!';
    }
);

//Les vraies pages ... justement

$f3->route('GET /@lg/missions',function ($f3,$params) {
//  echo $params['lg'];
  $page_name="missions";
  $f3->set('page_name',$page_name);
  traduction_page_header_footer($page_name,$params['lg'],$f3);
  hazard_citation($params['lg'],false);
  $template=new Template;
  echo $template->render('Views/missions.php');
});
$f3->route('GET /@lg/valeurs',function ($f3,$params) {
  $page_name="valeurs";
  $f3->set('page_name',$page_name);
  traduction_page_header_footer($page_name,$params['lg'],$f3);
  hazard_citation($params['lg'],false);
  echo Template::instance()->render('Views/valeurs.php');
});
$f3->route('GET /@lg/selection_projets',function ($f3,$params) {
  //  echo $params['lg'];
  $page_name="selection_projets";
  $f3->set('page_name',$page_name);
  traduction_page_header_footer($page_name,$params['lg'],$f3);

  hazard_citation($params['lg'],false);
  echo Template::instance()->render('Views/selection_projets.php');
});
$f3->route('GET /@lg/equipes',function($f3, $params) {
  //echo $params['lg']
  //$equipes=displayTitles();
  $page_name="equipes";
  $f3->set('page_name',$page_name);
  hazard_citation($params['lg'],false);
  traduction_page_header_footer($page_name,$params['lg'],$f3);

  $f3->set('equipes',$equipes);
  echo Template::instance()->render('Views/equipes.php');
});
$f3->route('GET /@lg/conseil',function ($f3,$params) {
  //  echo $params['lg'];
  $page_name="conseil";
  $f3->set('page_name',$page_name);
  hazard_citation($params['lg'],false);
  echo Template::instance()->render('Views/conseil.php');
});
$f3->route('GET /@lg/faq',function ($f3,$params) {
  //  echo $params['lg'];
  $page_name="conseil";
  $f3->set('page_name',$page_name);
  hazard_citation($params['lg'],false);
  echo Template::instance()->render('Views/faq.php');
});

$f3->route('GET /@lg/reseaux_partenaires',function ($f3,$params) {
  $page_name="reseaux_partenaires";
  $f3->set('page_name',$page_name);
  //echo hazard_citation($params['lg'],'techEducation');
  traduction_page_header_footer($page_name,$params['lg'],$f3);
  echo Template::instance()->render('Views/reseaux_partenaires.php');
});

$f3->route('GET /@lg/logement',function ($f3,$params) {
  $page_name="logement";
  $template=new Template;
  //echo hazard_citation($params['lg'],'techEducation');
  $f3->set('page_name',$page_name);
  traduction_page_header_footer($page_name,$params['lg'],$f3);
  echo $template->render('Views/logementtris.php');
});
$f3->route('GET /@lg/techEducation',function ($f3,$params) {
  $page_name="techEducation";
  $template=new Template;
  //echo hazard_citation($params['lg'],'techEducation');
  $f3->set('page_name',$page_name);
  traduction_page_header_footer($page_name,$params['lg'],$f3);
  echo $template->render('Views/tech_education.php');
});
$f3->route('GET /@lg/santeNutrition',function ($f3,$params) {
//  echo $params['lg'];
  $page_name="santeNutrition";
  $f3->set('page_name',$page_name);
  traduction_page_header_footer($page_name,$params['lg'],$f3);

  hazard_citation($params['lg'],'health');
  echo Template::instance()->render('Views/sante_nutrition.php');
});

// $f3->route('GET /admintest/page/@pagename',function ($f3,$params) {
//   is_connected_with(false,$f3,function($f3){
//     $f3->set('is_admin',is_admin());
//     traduction_page_header_footer("mission","fr",$f3);
//
//     echo Template::instance()->render('Views/missions.php');
//   });
// });


include 'routes/admin_routes.php';
include 'routes/projet_routes.php';
include 'routes/user_routes.php';
//on va bientot voir le bout du tunel !!!

$f3->run();





?>
