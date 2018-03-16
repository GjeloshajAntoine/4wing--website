<?php
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
      foreach ($this->field as $value) {
        $bdd = init_DB();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $bdd->prepare("INSERT INTO `projects_trad` (project_id,field,ln) VALUES (:project_id,:field,:ln) ");
        $stmt->execute(["project_id"=>$project_id,"field"=>$value,"ln"=>$lg]);
      }
    }
    return $project_id;
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
    var_dump($image);
    $file_name = $image['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);

    $incr=1;
    while (file_exists('projects_images/'.$file_name)) {
      $file_name=($incr++).'_'.$image['name'];
    }

    $bdd=init_DB();
    $bdd->beginTransaction();
    $stmt= $bdd->prepare("INSERT INTO projects_images (image_file_name,project_id) VALUES (:file,:project_id)");
    $stmt->execute(['file'=>$file_name,'project_id'=>$project_id]);

    $satus=move_uploaded_file($image['tmp_name'],'projects_images/'.$file_name);

    if ($satus) {
      $bdd->commit();
      echo "upload success";
    }else{
      echo "upload failed";
      $bdd->rollBack();
    }
  }
  static public function delete_image_to_id($image_id)
  {
    $bdd=init_DB();
    $stmt= $bdd->prepare("DELETE FROM projects_images WHERE id = :id");
    $stmt->execute(['id'=>$image_id]);

  }
  static public function add_logo_to_id($project_id,$image)
  {
    var_dump($image);
    $file_name = $image['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);

    $incr=1;
    while (file_exists('projects_logo/'.$file_name)) {
      $file_name=($incr++).'_'.$image['name'];
    }

    $bdd=init_DB();
    $bdd->beginTransaction();
    $stmt= $bdd->prepare("UPDATE projects  SET logo_file_name = :file WHERE id = :id");
    $stmt->execute(['file'=>$file_name,"id"=>$project_id]);

    $satus=move_uploaded_file($image['tmp_name'],'projects_logo/'.$file_name);

    if ($satus) {
      $bdd->commit();
      echo "upload success";
    }else{
      echo "upload failed";
      var_dump($status);
      $bdd->rollBack();
    }
  }
  static public function get_image_from_id($id)
  {
    $bdd=init_DB();
    $stmt= $bdd->prepare("SELECT * FROM projects_images WHERE project_id	 = :id");
    $stmt->execute(["id"=>$id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    $stmt = $bdd->prepare("SELECT * FROM projects_trad WHERE project_id= :id AND ln= :lg ");
    $stmt->execute(["project_id"=>$project_id,"parrain"=>$parrain,"link"=>$link]);
  }
  static public function get_info($id)
  {
    $stmt=init_DB()->prepare('SELECT * FROM projects WHERE id = :id');
    $stmt->execute(["id"=>$id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
  }
  static public function set_info($id,$title,$cat)
  {
    $bdd=init_DB();
    $stmt = $bdd->prepare("UPDATE projects SET title = :title , category = :cat WHERE id = :id ");
    $stmt->execute(["id"=>$id,"title"=>$title,"cat"=>$cat]);

  }
  static public function get_trad($id,$lg)
  {
    $stmt=init_DB()->prepare('SELECT * FROM projects_trad WHERE project_id = :id AND ln = :lg');
    $stmt->execute(["id"=>$id,'lg'=>$lg]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  static public function set_trad($id,$trad_array)
  {
    $stmt = init_DB()->prepare("UPDATE projects_trad SET trad = :string_trad WHERE id= :id ");
    foreach ($trad_array as $key => $value) {
      $stmt->execute(['string_trad'=>$value,'id'=>$key]);
    }
  }
}

$p=new Project();
 ?>
