<?php

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

 ?>
