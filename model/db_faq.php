<?php

function get_page_faq() {
    $bdd=init_DB();
    
    $stmt = $bdd->prepare("SELECT * FROM `page_faq`");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

 ?>