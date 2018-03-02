<?php

function connect($pseudo_or_mail,$password)
{
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $bdd=init_DB();
    if (filter_var($pseudo_or_mail, FILTER_VALIDATE_EMAIL)) {
      $stmt = $bdd->prepare("SELECT * FROM wings_user WHERE email = :pseudomail ");
    }else {
      $stmt = $bdd->prepare("SELECT * FROM wings_user WHERE name= :pseudomail  ");
    }
    $stmt->execute(['pseudomail'=>$pseudo_or_mail]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (password_verify($password,$result[0]['password'])) {
      $_SESSION['id']=$result[0]['id'];
      $_SESSION ['auth']=$result[0]['auth'];
      return true;
    }else{
      return false;
    }
}

function is_connected()
{
    return isset($_SESSION['id']);
}

function is_admin()
{
    if ($_SESSION ['auth'] == 0) {
        return true;
    }else {
        return false;
    }
}
function is_connected_test($f3,$callback){
    if (is_connected()) {
        $callback($f3);
    }else{
      $f3->reroute('/admin/login');
    }
}
function is_connected_with($should_admin,$f3,$callback){
    if (is_connected()) {
        if ($should_admin) {
            if (is_admin()) {
                $callback($f3);
            }else{
                $f3->reroute('/admin/login');
            }
        }else{
            $callback($f3);
        }
    }else{
        $f3->reroute('/admin/login');
    }
}
{

}
function create_user($name,$password,$email,$auth)
{
    if (is_connected() && is_admin()) {
        //$hash=password_hash($password, PASSWORD_DEFAULT);
        $random_password=random_password();
        $hash=password_hash($random_password, PASSWORD_DEFAULT);
        $bdd = init_DB();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $bdd->prepare("INSERT INTO wings_user (name,password,auth) VALUES (:name,:hash,:auth) ");
        $stmt->execute(['name'=>$name,'hash'=>$hash,'auth'=>$auth]);
        mail($email, "Compte créé", "Votre mot de passe: ".$random_password."\n Vous pouvez changer votre mot de passe dans l'interface d'adminitstration", "From:admin.interface@4wings.org");
      /*  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return count($result)? true : false;*/
    }else {
        return false;
    }
}
function list_user()
{
    $bdd = init_DB();
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $bdd->prepare("SELECT * FROM wings_user ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function change_user($id,$password,$auth)
{

}
function resetPassword($id)//les admin peuvent direct reset les mots de passe de tout le monde
                           // meme sans connaitre le précédent
{
  $bdd=init_DB();
  $new_password=random_password(8);
  //set password
  $hashed_password=password_hash($new_password, PASSWORD_DEFAULT);
  $stmt = $bdd->prepare("UPDATE 4wings_user SET password = :password WHERE id= :id ");
  $stmt->execute(["password"=>$hashed_password,"id"=>$id]);
  //get email
  $stmt = $bdd->prepare("SELECT * FROM wings_user WHERE id= :id  ");
  $stmt->execute(['name'=>$name]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
function change_password($id,$old_password,$new_password)//les utilisateurs peuvent changer leur mot de passe s'ils connaissent le précédent
{
  $bdd=init_DB();
  $stmt = $bdd->prepare("SELECT * FROM wings_user WHERE id= :id  ");
  $stmt->execute(['name'=>$name]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (password_verify($old_password,$result[0]["password"])) {
    $hashed_password=password_hash($new_password, PASSWORD_DEFAULT);
    $stmt = $bdd->prepare("UPDATE 4wings_user SET password = :password WHERE id= :id ");
    $stmt->execute(["password"=>$hashed_password,"id"=>$id]);

  }
}
function delete_user(Type $var = null)
{

}
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
function send_mail() {

}
?>
