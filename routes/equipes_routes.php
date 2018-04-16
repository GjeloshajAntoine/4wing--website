<?php

$f3->route('GET /admin/equipes/membres/list',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);
    //var_dump(get_membres());
    $f3->set('membreslist',get_membres());
    echo Template::instance()->render('admin_views/equipes_membres_list.php');
  });
});
$f3->route('POST /admin/equipes/membres/image/add',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);
  header("Content-type:application/json");

  $img_name=set_membre_image($_POST['id'],$_FILES['img']);
  if ($img_name) {
    echo json_encode(["imgName"=>$img_name,"success"=>true]);
  }else {
    echo json_encode(["success"=>false]);
  }
    // echo Template::instance()->render('admin_views/equipes_membres_list.php');
  });
});

$f3->route('POST /admin/equipes/membres/data',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);
  var_dump($_POST);
  echo implode(',',isset($_POST["equipes"])?$_POST["equipes"] : []);
  set_membre($_POST);
      // echo Template::instance()->render('admin_views/equipes_membres_list.php');
  });
});
$f3->route('POST /admin/equipes/membres/delete',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);
    echo Template::instance()->render('admin_views/equipes_membres_list.php');
  });
});

 ?>
