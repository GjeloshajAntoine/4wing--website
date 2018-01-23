<?php

function get_page_trad_list() {
  $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("SELECT page_name FROM `pages_trad` GROUP BY page_name ");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
//print_r(get_page_trad_list());

function get_trad_page($page_name){
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("SELECT * FROM `pages_trad` WHERE  page_name = :page_name");
  $stmt->execute(['page_name'=>$page_name]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

//print_r(get_trad_page('vraipage'));
 ?>
