<?php
//formulaire de contact
function send_contact_form(){
  $body='Nom : '.$_POST["name"]."\n";
  $body=$body.'mail: '.$_POST["email"]."\n";
  $body=$body.'gsm: '.$_POST["mobile"]."\n";
  $body=$body."\n".$_POST["message"];
  mail('anton96@live.be', "".$_POST["subject"], $body, "From:contact.admin.interface@4wings.org");

}

 ?>
