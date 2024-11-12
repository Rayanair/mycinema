<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
var_dump($_POST);
$r = $_POST["id"];

    if(isset($_POST['validate'])){
        if($_POST['abonnements']=="1"){
            $insertUserOnWebsite = $bdd->prepare("UPDATE membership SET id_subscription = 1 , date_begin = CONCAT(curdate(),' ',CURRENT_TIME()) WHERE id = ?");
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="2"){
            $insertUserOnWebsite = $bdd->prepare("UPDATE membership SET id_subscription = 2 , date_begin = CONCAT(curdate(),' ',CURRENT_TIME()) WHERE id = ?");
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="3"){
            $insertUserOnWebsite = $bdd->prepare("UPDATE membership SET id_subscription = 3 , date_begin = CONCAT(curdate(),' ',CURRENT_TIME()) WHERE id = ?");
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="4"){
            $insertUserOnWebsite = $bdd->prepare("UPDATE membership SET id_subscription = 4 , date_begin = CONCAT(curdate(),' ',CURRENT_TIME()) WHERE id = ?");
            $insertUserOnWebsite->execute(array($r));
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>