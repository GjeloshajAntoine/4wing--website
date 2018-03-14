<?php
class DB {
  public $bdd;

  function __construct(){
    try
    {
      $this->bdd= new PDO ('mysql:host=localhost; dbname=test', 'root', 'root');
      $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "connected successfully";

    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
      // echo "connection failed";
    }
  }

  public function getDb(){
     return $this->bdd;
  }
}
  function displayTitles() {
    $DB = new DB();
    $bdd = $DB->getDb();
    $reponse=$bdd->query("SELECT * FROM Team LIMIT 2");
    // while($donnees=$reponse->fetch())
    // {
    //   echo "<p>  {$donnees['Title']} {$donnees['Description']} </p>";
    //   echo '<img src="'.$donnees['url_Img'].' ">';
    // }
    //
    // $reponse->closeCursor();
    return $reponse->fetchAll(PDO::FETCH_ASSOC);
  }
  // echo '<pre>' . var_export(displayTitles(), true) . '</pre>';


  function NewImage($url){
     $url_Img = $url;
     $title = isset($_POST['name']) ? $_POST['name'] : "";
     $description =  isset($_POST['message']) ? $_POST['message'] : "";

     if($title != "" && $description != ""){
        $DB = new DB();
        $bdd = $DB->getDb();
        $request = $bdd->prepare('INSERT INTO Team (url_Img, Title, Description) VALUES(?, ?, ?)');
        $request->execute([$url_Img, $title, $description]);
     }
  }
 ?>
