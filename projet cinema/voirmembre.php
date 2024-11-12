<?php 
require "affichage/rechercheUser.php"; 
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
<div class="container">
  <form class="form-inline" method="GET">  
    <a href="javascript:history.go(-1)" class="re">Retour</a>
     <input type="search" name="r" placeholder="Recherche d'utilisateurs" class="rech">
     <input type="submit" name="envoyer" class="button">
  </form>
</div>

<section class="affiche_user">
    <?php
        if($alluser->rowCount() > 0){
            ?>
<table class="table table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID MEMBRE</th>
      <th scope="col">PRENOM</th>
      <th scope="col">NOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ADRESSE</th>
      <th scope="col">CODE POSTAL</th>
      <th scope="col">VILLE</th>
      <th scope="col">PAYS</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($user = $alluser->fetch())
            {
                ?>
                <div class="usernom">
                <tr>
                <th scope="row"><?= $user[9]?></th>
                <td><?= $user[2]?></td>
                <td><?= $user[3]?></td>
                <td><?= $user[1]?></td>
                <td><?= $user[5]?></td>
                <td><?= $user[6]?></td>
                <td><?= $user[7]?></td>
                <td><?= $user[8]?></td>
                <td><a href='/infomembre.php?id=<?=$user[9]?>' class="voir">Voir</a></td>
                <td><a href='/histofilm.php?id=<?=$user[9]?>' class="aj">Ajouter film</a></td>
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
            <p>aucun user</p>
    <?php
        }
    ?>
</section>
</body>
</html>