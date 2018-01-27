<?php

function get_page_trad_list() {
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("SELECT page_name FROM `pages_trad` GROUP BY page_name ");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
//print_r(get_page_trad_list());

function get_trad_page($page_name,$lg){
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("SELECT * FROM `pages_trad` WHERE  page_name = :page_name AND lg= :lg");
  $stmt->execute(['page_name'=>$page_name,'lg'=>$lg]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function set_trad_page($trad_array) {
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("UPDATE pages_trad SET string_trad = :string_trad WHERE id= :id ");
  foreach ($trad_array as $key => $value) {
    $stmt->execute(['string_trad'=>$value,'id'=>$key]);
  }
  //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //return $result;
}
//print_r(get_trad_page('vraipage'));
 ?>
