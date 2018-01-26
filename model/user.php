<?php

function connect($name,$password)
{
    $hash=sha1($password);
    $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $bdd->prepare("SELECT * FROM wings_user WHERE name= :name AND password = :hash ");
    $stmt->execute(['name'=>$name,'hash'=>$hash]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['id']=$result[0]['id'];
    $_SESSION ['auth']=$result[0]['auth'];
    return count($result)? true : false;// condtion ? vrai : faux
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

function create_user($name,$password,$auth)
{
    if (is_connected() && is_admin()) {
        $hash=sha1($password);
        $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $stmt = $bdd->prepare("INSERT INTO wings_user (name,password,auth) VALUES (:name,:hash,:auth) ");
        $stmt->execute(['name'=>$name,'hash'=>$hash,'auth'=>$auth]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return count($result)? true : false;
    }else {
        return false;
    }
}
function list_user()
{
    $bdd = new PDO('mysql:host=localhost;dbname=akkad', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $bdd->prepare("SELECT * FROM wings_user ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function change_user($id,$password,$auth)
{
    
}
function delete_user(Type $var = null)
{
    
}
?>