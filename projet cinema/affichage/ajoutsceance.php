<?php
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$dragon = $bdd->query('SELECT count(id)+1 from movie_schedule');
$id = $dragon->fetch();
echo($id[0]);
$r = $_POST["id"];
echo($r);
echo($_POST['validate']);
if(isset($_POST['validate'])){
        if($_POST['abonnements']=="1"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,1,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="2"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,2,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="3"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,3,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="4"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,4,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="5"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,5,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="6"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,6,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="7"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,7,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="8"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,8,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="9"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,9,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="10"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,10,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="11"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,11,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="12"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,12,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="13"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,13,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="14"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,14,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="15"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,15,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="16"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,16,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }elseif($_POST['abonnements']=="17"){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO movie_schedule (id,id_movie, id_room, date_begin) VALUES('.$id[0].',?,17,CONCAT(DATE_FORMAT(CURDATE() + 2,"%Y-%m-%d")," ",CURRENT_TIME()))');
            $insertUserOnWebsite->execute(array($r));
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

?>