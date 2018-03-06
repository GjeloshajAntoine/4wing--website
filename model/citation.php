<?php
function list_citation($lg="fr") {
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM citations WHERE ln = :lg");
  $stmt->execute(['lg'=>$lg]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function list_citation_lg($lg)
{
    $bdd=init_DB();
    $stmt = $bdd->prepare("SELECT * FROM citations WHERE ln= :lg ");
    $stmt->execute(['ln'=>$lg]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function citation_id($id)
{
  $stmt = init_DB()->prepare("SELECT * FROM citations WHERE id= :id");
  $stmt->execute(['id'=>$id]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result[0];
}
function hazard_citation($lg,$cat)
{
    $bdd=init_DB();
    $stmt = $bdd->prepare("SELECT citation FROM citations WHERE ln= :lg AND categorie = :cat ORDER BY rand() LIMIT 1 ");
    $stmt->execute(['lg'=>$lg,'cat'=>$cat]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0]['citation'];
}
function add_citation($citation,$auteur,$lg,$cat)
{
    $bdd=init_DB();
    $stmt = $bdd->prepare("INSERT INTO citations (citation,auteur,ln,categorie) VALUES (:citation,:auteur,:lg,:cat)");
    $stmt->execute(['citation'=>$citation,'auteur'=>$auteur,'lg'=>$lg,'cat'=>$cat]);
    return $bdd->lastInsertId();
}
function edit_citation($id,$citation,$auteur,$lg,$cat)
{
    $bdd=init_DB();
    $stmt = $bdd->prepare("UPDATE  citations SET citation = :citation, auteur = :auteur ,ln = :lg , categorie = :cat WHERE id = :id");
    $stmt->execute(['citation'=>$citation,'auteur'=>$auteur,'lg'=>$lg,'cat'=>$cat,'id'=>$id]);
}
?>
