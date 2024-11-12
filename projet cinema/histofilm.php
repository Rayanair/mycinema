<?php 
require "affichage/ajoutfilm.php"; 
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
  <form class="form-inline" method="POST">  
  <a href="javascript:history.go(-1)" class="re">Retour</a>
  </form>
</div>
<section class="affiche_film">
    <?php
        if($sceance->rowCount() > 0){
            ?>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">TITRE</th>
      <th scope="col">DATE</th>
      <th scope="col">AJOUTER</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($film = $sceance->fetch())
            {

                ?>
                <form action="/infofilm.php" method="POST">
                <div class="usernom">
                <tr>
                <td><?= $film[6]?></td>
                <td><?= $film[0]?></td>
                <td><?= $film[5]?></td>
                </form>
                <form action="affichage/lessceanace.php" method="GET"> 
                  <td><input type="submit" value="Ajouter" name="validate"/></td>
                  <input value="<?= $film[6]?>" name="film" style="display: none"/>
                  <input value="<?= $_GET['id'] ?>" name="id" style="display: none"/>
                  </form>
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
            <p>Ancun Films</p>
    <?php
        }
    ?>
</section>
</body>
</html>