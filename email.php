<?php
  /*   $to      = 'anton96@live.be';
     $subject = 'Creation de votre compte';
     $message = "Bonjour, \n votre compte a été créé.\r\n Un mot de passe aléatoire a été généré: \r\n mot de passe: efzgagaer \n vous pouvez le changer a tout moment dans l'interface d'aministration. ";
     $headers = 'From: admin.interface@4wings.org' . "\r\n" .
     'Reply-To: admin.interface@4wings.org' . "\r\n" .
     "content-type: text/plain"."\r\n".
     'X-Mailer: PHP/' . phpversion();

     $status=mail($to, $subject, $message, $headers);
     echo '<pre style="font-family:Comic Sans,sans-serif;font-size:72px;color:red;background-color:aliceblue;">'.var_export($status,true).'</pre>';
    */
    mail('anton96@live.be', "Creation de votre compte", "Votre mot de passe: ".$random_password."\n Vous é pouvez changer votre mot de passe dans l'interface d'adminitstration", "From:admin.interface@4wings.org");

 ?>
