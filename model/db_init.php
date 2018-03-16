<?php
function init_DB()
{
  $bdd = new PDO($GLOBALS["dsn"],$GLOBALS["user"],$GLOBALS["password"],[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  return $bdd;
}

 ?>
