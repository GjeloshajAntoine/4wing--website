<?php
function get_equipe($value='')
{

}
function set_membre($field) {
  $bdd=init_DB();
  $stmt = $bdd->prepare("UPDATE `membres` SET nom = :nom , equipes = :equipes");
  $stmt->execute(['nom'=>$field['nom'],'equipes'=>implode(',',isset($field["equipes"])?$field["equipes"] : [])]);
  //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //return $result;
}
function set_membre_image($id) {

}
function get_membres()
{
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM `membres`");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;

}
 ?>
