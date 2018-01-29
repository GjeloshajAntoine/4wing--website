<?php

function list_citation($lg)
{
    $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $bdd->prepare("SELECT * FROM citations WHERE ln= :lg ");
    $stmt->execute(['ln'=>$lg]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function hazard_citation($lg,$cat)
{
    $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $bdd->prepare("SELECT citation FROM citations WHERE ln= :lg AND categorie = :cat ORDER BY rand() LIMIT 1 ");
    $stmt->execute(['lg'=>$lg,'cat'=>$cat]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0]['citation'];
}
function add_citation($citation,$lg,$cat)
{
    $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $bdd->prepare("INSERT INTO citations (citation,ln,categorie) VALUES (:citation,:lg,:cat)");
    $stmt->execute(['citation'=>$citation,'lg'=>$lg,'cat'=>$cat]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0]['citation'];
}
function edit_citation($id)
{
    $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $bdd->prepare("UPDATE  citations SET citation = :citation, ln = :lg , categorie = :cat WHERE id = :id");
    $stmt->execute(['citation'=>$citation,'lg'=>$lg,'cat'=>$cat,'id'=>$id]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}
echo hazard_citation('fr','sante');
?>