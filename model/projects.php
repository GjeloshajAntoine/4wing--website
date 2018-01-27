<?php
function create_project($name)
{

}
/**
 *
 */
class Project
{
  var $field=[];
  var $languages=['fr','nl','en'];
  function __construct()
  {
    $this->$field=['titre','le_projet','soutiens'];
  }
  public function create()
  {
    //create Project

    //create trad
    foreach ($this->languages as $lg) {
      foreach ($fied as $value) {
        $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $bdd->prepare("INSERT INTO `project_trad` (project_id,field,ln) VALUES (:project_id,:field,:ln) ");
        $stmt->execute(["project_id"=>$project_id,"field"=>$field,"ln"=>$lg]);
      }
    }
  }
  public function add_parrain_to_id()
  {

  }
  public function add_porteur_to_id()
  {

  }
  public function add_image_to_id()
  {
    # code...
  }
  public function check_fields()
  {
    //nope
  }
}

$p=new Project();
 ?>
