<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$id = $_GET["id"];
$alluser = $bdd->query("SELECT user.firstname, user.lastname, title, membership.id, movie_schedule.id from movie inner join movie_schedule on movie.id=movie_schedule.id_movie inner join membership_log on movie_schedule.id=membership_log.id_session inner join membership on membership.id=membership_log.id_membership inner join user on user.id=membership.id_user where membership.id like $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css"/>
</head>
<body>
<a href="javascript:history.go(-1)" class="re">Retour</a>
<section class="affiche_film">
<?php
        if($alluser->rowCount() > 0){
            ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Films vue</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($film = $alluser->fetch())
            {
                ?>
                <div class="usernom">
                <tr>
                <td><?= $film[2]?></td>
                </tr>
                </div>

                <?php
            }
            ?>
            </tbody>
            </table>
                <?php
        }else{
    ?>
            <p>Aucunes Scéance</p>
    <?php
        }
    ?>
</section>
</body>
</html>