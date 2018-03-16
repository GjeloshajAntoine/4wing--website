<?php

function get_page_trad_list() {
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT page_name FROM `pages_trad` GROUP BY page_name ");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
//print_r(get_page_trad_list());

function get_trad_page($page_name,$lg){
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM `pages_trad` WHERE  page_name = :page_name AND lg= :lg");
  $stmt->execute(['page_name'=>$page_name,'lg'=>$lg]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function set_trad_page($trad_array) {
  $bdd=init_DB();
  $stmt = $bdd->prepare("UPDATE pages_trad SET string_trad = :string_trad WHERE id= :id ");
  foreach ($trad_array as $key => $value) {
    $stmt->execute(['string_trad'=>$value,'id'=>$key]);
  }
  //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //return $result;
}
//print_r(get_trad_page('vraipage'));
function traduction_page_header_footer($name,$lg,$f3) {
  $bdd = init_DB();
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $bdd->prepare("SELECT * FROM `pages_trad` WHERE (page_name = :page_name  OR page_name = 'footer' OR page_name = 'header')  AND lg = :lg");
  $stmt->execute(array('page_name' => $name,'lg'=>$lg));
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  for ($i=0; $i <count($result) ; $i++) {
    $f3->set($result[$i]['string_origin'],$result[$i]['string_trad']);
  }

}

 ?>
