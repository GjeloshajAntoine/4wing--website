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
  public function create($title)
  {
    //create Project

    $bdd=init_DB();
    $stmt = $bdd->prepare("INSERT INTO projects (title) VALUES (:title) ;");
    $stmt->execute(["title"=>$title]);
    $project_id=$bdd->lastInsertId();
    //create trad
    foreach ($this->languages as $lg) {
      foreach ($fied as $value) {
        $bdd = init_DB();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $bdd->prepare("INSERT INTO `project_trad` (project_id,field,ln) VALUES (:project_id,:field,:ln) ");
        $stmt->execute(["project_id"=>$project_id,"field"=>$field,"ln"=>$lg]);
      }
    }
  }
  public function add_parrain_to_id($project_id,$parrain,$link)
  {
    $bdd=init_DB();
    $stmt = $bdd->prepare("INSERT INTO `projects_parrains` (id_project,parrain,link) VALUES (:project_id,:parrain,:link) ");
    $stmt->execute(["project_id"=>$project_id,"parrain"=>$parrain,"link"=>$link]);

  }
  public function add_porteur_to_id($project_id)
  {
    $bdd=init_DB();;
    $stmt = $bdd->prepare("INSERT INTO `projects_parrains` (id_project,parrain,link) VALUES (:project_id,:parrain,:link) ");
    $stmt->execute(["project_id"=>$project_id,"parrain"=>$parrain,"link"=>$link]);
  }
  public function add_image_to_id($project_id,$image)
  {

  }
  public function check_fields()
  {

  }
  static public  function get_all_projects( )
  {
    $bdd=init_DB();
    $stmt= $bdd->query("SELECT * FROM projects");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  static public function get_all_trad($id,$lg)
  {
    # code...
  }
}

$p=new Project();
 ?>
