<?php

// function get_page_faq() {
//   $bdd=init_DB();
//   $stmt = $bdd->prepare("SELECT * FROM `page_faq`");
//   $stmt->execute();
//   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   return $result;
// };

function get_faq() {
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM `faq`");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function get_faq_lg($lg) {
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM `faq` WHERE lg = :lg");
  $stmt->execute(["lg"=>$lg]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function get_question($id) {
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM `faq` WHERE id = :id");
  $stmt->execute(["id"=>$id]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
  return $result;
}
function set_question($fields) {
  $bdd=init_DB();
  $stmt = $bdd->prepare("UPDATE faq SET ");
  $stmt->execute($fields);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
  return $result;
}

 ?>
