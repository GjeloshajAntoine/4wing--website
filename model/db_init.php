<?php
function init_DB()
{
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  return $bdd;
}
 ?>
