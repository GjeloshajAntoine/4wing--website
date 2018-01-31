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
    $this->field=['titre','le_projet','soutiens'];
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
    $bdd=init_DB();
    $stmt = $bdd->prepare("INSERT INTO `projects_parrains` (id_project,parrain,link) VALUES (:project_id,:parrain,:link) ");
    $stmt->execute(["project_id"=>$project_id,"parrain"=>$parrain,"link"=>$link]);
  }
  static public function add_image_to_id($project_id,$image)
  {
    $bdd=init_DB();
    $stmt= $bdd->prepare("INSERT INTO projects_images (project_id) VALUES (:project_id)");
    $stmt->execute(['project_id'=>$project_id]);
    $image_id=$bdd->lastInsertId();

    $path = $image['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    move_uploaded_file($image['tmp_name'],'projects_images/'.$image_id.'.'.$ext);
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
    $bdd=init_DB();
    $stmt = $bdd->prepare("SELECT * FROM project_trad WHERE project_id= :id AND ln= :lg ");
    $stmt->execute(["project_id"=>$project_id,"parrain"=>$parrain,"link"=>$link]);
  }
  static public function get_info($id)
  {
    $stmt=init_DB()->prepare('SELECT * FROM project WHERE id = :id');
    $stmt->execute(["id"=>$id]);
    return $stmt->fetchAll(PDO:FETCH_ASSOC)[0];
  }
  static public function set_info($id,$info)
  {

  }
}

$p=new Project();
 ?>
