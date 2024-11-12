<?php
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$dragon = $bdd->query('SELECT count(id)+1 from membership');
$id = $dragon->fetch();
$r = $_POST["id"];
if(isset($_POST['validate'])){
        if($_POST['abonnements']=="1"){
            $insertUserOnWebsite = $bdd->prepare("INSERT INTO membership (id,id_user, id_subscription, date_begin) VALUES($id[0],?,1,CONCAT(curdate(),' ',CURRENT_TIME()))");
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="2"){
            $insertUserOnWebsite = $bdd->prepare("INSERT INTO membership (id,id_user, id_subscription, date_begin) VALUES($id[0],?,2,CONCAT(curdate(),' ',CURRENT_TIME()))");
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="3"){
            $insertUserOnWebsite = $bdd->prepare("INSERT INTO membership (id,id_user, id_subscription, date_begin) VALUES($id[0],?,3,CONCAT(curdate(),' ',CURRENT_TIME()))");
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="4"){
            $insertUserOnWebsite = $bdd->prepare("INSERT INTO membership (id,id_user, id_subscription, date_begin) VALUES($id[0],?,4,CONCAT(curdate(),' ',CURRENT_TIME()))");
            $insertUserOnWebsite->execute(array($r));
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>