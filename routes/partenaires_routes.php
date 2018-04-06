<?php
$f3->route('GET /admin/partenaires/list',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);
    $f3->set('membreslist',get_partenaires());
    echo Template::instance()->render('admin_views/partenaires_list.php');
  });
});
$f3->route('POST /admin/partenaires/image/add',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);
    echo Template::instance()->render('admin_views/partenaires_list.php');
  });
});
$f3->route('POST /admin/partenaires/data',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);

    echo Template::instance()->render('admin_views/partenaires_list.php');
  });
});
$f3->route('POST /admin/partenaires/delete',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
  //  $f3->set('lg',$f3->PARAMS["lg"]);
    echo json_encode(set_image_partenaires($f3->PARAMS['id'],$_FILES['file']));
    //echo Template::instance()->render('admin_views/partenaires_list.php');
  });
});

?>
