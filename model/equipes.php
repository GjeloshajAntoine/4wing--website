<?php
function get_equipe($value='')
{

}
function set_membre($field) {
  $bdd=init_DB();
  $stmt = $bdd->prepare("UPDATE `membres` SET nom = :nom , equipes = :equipes WHERE id = :id");
  $stmt->execute(['id'=>$field['id'],'nom'=>$field['nom'],'equipes'=>implode(',',isset($field["equipes"])?$field["equipes"] : [])]);
  //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //return $result;
}
function set_membre_image($membre_id,$image) {
  $file_name = $image['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);

  $incr=1;
  while (file_exists('membres_images/'.$file_name)) {
    $file_name=($incr++).'_'.$image['name'];
  }

  $bdd=init_DB();
  $bdd->beginTransaction();
  $stmt= $bdd->prepare("UPDATE membres  SET img = :file WHERE id = :id");
  $stmt->execute(['file'=>$file_name,"id"=>$membre_id]);

  $satus=move_uploaded_file($image['tmp_name'],'membres_images/'.$file_name);

  if ($satus) {
    $bdd->commit();
    //echo "upload success";
    return $file_name;
  }else{
    //echo "upload failed";
    var_dump($status);
    $bdd->rollBack();
  }
}
function get_membres()
{
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM `membres`");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  for ($i=0; $i <count($result) ; $i++) {
    $result[$i]['equipes']=explode(',',$result[$i]['equipes']);
  }
  return $result;

}
 ?>
