<?php

get_partenaires(){
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM `partenaires`");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;

}
add_partenaire($field){
  $bdd=init_DB();
  $stmt = $bdd->prepare("INSERT INTO `partenaires` (nom,lien) VALUES (:nom,:lien)");
  $stmt->execute($field);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;

}
set_partenaires($field){
  $bdd=init_DB();
  $stmt = $bdd->prepare("UPDATE `partenaires` SET nom = :nom, lien = :lien WHERE id = :id");
  $stmt->execute($field);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;

}
set_image_partenaires($id,$image){
  var_dump($image);
  $file_name = $image['name'];
  //$ext = pathinfo($path, PATHINFO_EXTENSION);

  $incr=1;
  while (file_exists('projects_logo/'.$file_name)) {
    $file_name=($incr++).'_'.$image['name'];
  }

  $bdd=init_DB();
  $bdd->beginTransaction();
  $stmt= $bdd->prepare("UPDATE partenaires  SET img = :file WHERE id = :id");
  $stmt->execute(['file'=>$file_name,"id"=>$id]);

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
 ?>
