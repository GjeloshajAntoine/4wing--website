<?php

$f3->route('GET /admin/projet/list',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('all_projects',Project::get_all_projects());
    echo Template::instance()->render('admin_views/projet_list.php');
  });
});
$f3->route('GET /admin/projet/@id',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('id',$f3->PARAMS['id']);
    $f3->reroute('/admin/projet/@id/info');
  });
});
$f3->route('GET /admin/projet/@id/info',function ($f3,$params) {//info principales nom,catégories
  is_connected_with(false,$f3,function($f3){
    $f3->set('project',Project::get_info($f3->PARAMS['id']));
    $f3->set('id',$f3->PARAMS['id']);
    echo Template::instance()->render('admin_views/projet_info.php');
  });
});
$f3->route('POST /admin/projet/@id/info/editdata',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    Project::set_info();
    $f3->reroute('/admin/projet/@id/info');
  });
});
$f3->route('GET /admin/projet/@id/trad/@lg',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('all_trad',Project::get_trad($f3->PARAMS['id'],$f3->PARAMS['lg']));
    $f3->set('id',$f3->PARAMS['id']);
    $f3->set('lg',$f3->PARAMS['lg']);
    echo Template::instance()->render('admin_views/projet_trad.php');
  });
});

$f3->route('POST /admin/projet/@id/trad/@lg/editdata',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
     Project::set_trad($f3->PARAMS['id'],$_POST);
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
    $f3->set("all_images",Project::get_image_from_id($f3->PARAMS['id']));
      $f3->set('id',$f3->PARAMS['id']);
    echo Template::instance()->render('admin_views/projet_image_updload.php');
  });
});
$f3->route('POST /admin/projet/@id/image/add',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
     Project::add_image_to_id($f3->PARAMS['id'],$_FILES['file']);
    echo Template::instance()->render('admin_views/');
  });
});
$f3->route('POST /admin/projet/@id/image/delete',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
     Project::add_image_to_id($f3->PARAMS['id'],$_FILES['file']);
    echo Template::instance()->render('admin_views/');
  });
});
$f3->route('POST /admin/projet/@id/logo/change',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
     Project::add_logo_to_id($f3->PARAMS['id'],$_FILES['file']);
    //echo Template::instance()->render('admin_views/projet_info.php');
    $f3->reroute("/admin/projet/".$f3->PARAMS['id']."/info");
  });
});

 ?>
