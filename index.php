<?php
define('VIEW', 'Views/');

require_once(VIEW. "header.html");

$action=isset($_GET['action']) ? htmlentities($_GET['action']) : '';

switch ($action) {
  case 'accueil';
    require_once(VIEW . 'selectionProjet.html');
    break;

}

require_once(VIEW . 'footer.html');
 ?>
