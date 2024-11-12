<?php 
require "affichage/listeuser.php"; 
require "affichage/supruser.php";
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
<a href="javascript:history.go(-1)" class="re">Retour</a>
</div>
<section class="affiche_user">
    <?php
        if($allusers->rowCount() > 0){
            ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">PRENOM</th>
      <th scope="col">NOM</th>
      <th scope="col">ABONNEMENT</th>
      <th scope="col">TITRE</th>
      <th scope="col">PRIX</th>
      <th scope="col">DUREE</th>
      <th scope="col">REDUCTION</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($user = $allusers->fetch())
            {
                ?>
                <div class="usernom">
                <tr>
                <th><?= $user[7]?></th>
                <td><?= $user[0]?></td>
                <td><?= $user[1]?></td>
                <td><?= $user[2]?></td>
                <td><?= $user[3]?></td>
                <td><?= $user[4]?></td>
                <td><?= $user[5]?></td>
                <td><?= $user[6]?></td>
                <td><form method="POST"><input type="submit" class="btn btn-primary" name="validate" value="Supprimer"></form></td>
                <td>
                  <form  action="affichage/modifuser.php"method="POST">
                  <select name='abonnements' id="">
                      <option value="">Abonnements</option>
                      <option value="1">VIP</option>
                      <option value="2">GOLD</option>
                      <option value="3">Classic</option>
                      <option value="4">Pass Day</option>
                  </select>
                  <input value="<?= $user[7]?>" name="id" style="display: none"/>
                </td>
                <td><input type="submit" name="validate" value="Modifier"></td>

                  </form>
                </td>
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