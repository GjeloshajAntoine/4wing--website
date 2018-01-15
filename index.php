<?php

function traduction() {
  return ["title"=>"The TITLE","message"=>"The mésséidge"];
}
$f3 = require('fatfree/lib/base.php');

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
  echo $params['lg'];
  $page_name="vraipage";

  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("SELECT * FROM `pages_trad` WHERE page_name = :page_name AND lg= :lg");
  $stmt->execute(array('page_name' => $page_name,'lg'=>$params['lg']));
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  for ($i=0; $i <count($result) ; $i++) {
    print_r($result[$i]);
    echo "<br/>";
    $f3->set($result[$i]['string_origin'],$result[$i]['string_trad']);
  }


  $template=new Template;
  echo $template->render('vraipage.html');
});
$f3->run();
