<?php
function init_DB()
{
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  return $bdd;
}

 ?>
