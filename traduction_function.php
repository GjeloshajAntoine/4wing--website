<?php


function traduction_page($name,$lg,$f3) {
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("SELECT * FROM `pages_trad` WHERE page_name = :page_name AND lg= :lg");
  $stmt->execute(array('page_name' => $name,'lg'=>$lg));
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  for ($i=0; $i <count($result) ; $i++) {
    $f3->set($result[$i]['string_origin'],$result[$i]['string_trad']);
  }

}

 ?>
