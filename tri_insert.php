<?php
$langues=["fr","nl","en"];
if (isset($_POST["page"])) {
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root',[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  foreach ($langues as $lg) {
    $content_exemple="[".$lg."]".$_POST["content_fr_ex"];
    $stmt = $bdd->prepare("INSERT INTO pages_trad (page_name,string_origin,string_trad,lg) VALUES (:name,:origin,:trad,:lg) ;");
    $stmt->execute(["name"=>$_POST["page"],"origin"=>$_POST["field"],"trad"=>$content_exemple,"lg"=>$lg]);
  }
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Inserer nouveau paragraphe en 3 langues</h1>
     <?php if (isset($_POST["page"])): ?>
       <h2>Champ <?php echo $_POST["field"] ?> bien enregistré pour la page <?php echo $_POST["page"] ?> </h2>
     <?php endif; ?>
     <form class="" action="" method="post">
       <input type="text" name="page" value="" placeholder="nom de la page">
       <input type="text" name="field" value="" placeholder="nom du champ">
       <input type="text" name="content_fr_ex" value="" placeholder="contenu d'exemple">
       <input type="submit" name="" value="insert" value="">
     </form>
   </body>
 </html>
