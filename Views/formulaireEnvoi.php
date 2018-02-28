<?php
  if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0)
  {
    if($_FILES['fileToUpload']['size']<= 4000000)
    {
      $infoFicher = pathinfo($_FILES['fileToUpload']['name']);
      $extensionUpload = $infoFicher['extension'];
      $extentionAutoriser = array ('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extensionUpload, $extentionAutoriser))
      {
        // move_upload_file($_FILES['fileToUpload']['tmp_name'] 'upload/' . basename($_FILES['fileToUpload']['name']));
        echo "L'envoi a bien été effectué!";
      }
    }
  }
  else {
    echo "erreur";
  }

 ?>
