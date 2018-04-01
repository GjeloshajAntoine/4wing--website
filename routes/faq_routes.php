<?php
$f3->route('GET /admin/faq/list/@lg',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('lg',$f3->PARAMS["lg"]);
    $f3->set('faqliste',get_faq_lg($f3->PARAMS["lg"]));
    echo Template::instance()->render('admin_views/faq_list.php');
  });
});
$f3->route('GET /admin/faq/@id',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('lg',$f3->PARAMS["lg"]);
    $f3->set('question',get_question($f3->PARAMS["id"]));
    echo Template::instance()->render('admin_views/faq_edit.php');
  });
});
$f3->route('POST /admin/faq/edit/data',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('lg',$f3->PARAMS["lg"]);
    $f3->set('question',set_question($_POST));
    echo Template::instance()->render('admin_views/faq_edit.php');
  });
});
$f3->route('POST /admin/faq/new/data',function ($f3,$params) {
  is_connected_with(false,$f3,function($f3){
    $f3->set('lg',$f3->PARAMS["lg"]);
    $f3->set('question',new_question($f3->PARAMS["id"]));
    echo Template::instance()->render('admin_views/faq_edit.php');
  });
});

 ?>
