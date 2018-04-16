<?php

$prod=false;

if ($prod) {
  //PRODUCTION
  $GLOBALS["subrootpath"]="";
  $GLOBALS["dsn"] = 'mysql:dbname=mspeecka_4wings_2018';
  $GLOBALS["user"] = 'mspeeckaert';
  $GLOBALS["password"] = 'BeCode2017!';

}else {
  //DEVELOPPEMENT
  $GLOBALS["subrootpath"]="/4wing-website";
  $GLOBALS["dsn"] = 'mysql:host=localhost;dbname=test';
  $GLOBALS["user"] = 'root';
  $GLOBALS["password"] = 'root';

}

 ?>
