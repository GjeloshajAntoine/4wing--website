<?php

  function get_faq() {
    $bdd=init_DB();
    $stmt = $bdd->prepare("SELECT * FROM `faq`");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

 ?>
