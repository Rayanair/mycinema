<?php 
require "affichage/lesemploie.php"
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
  </form>
</div>
<section class="affiche_film">
    <?php
        if($employe->rowCount() > 0){
            ?>
    <table class="table">
  <thead >
    <tr>
    <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Emploie</th>
      <th scope="col">Description</th>
      <th scope="col">Début job</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($film = $employe->fetch())
            {
                ?>
                <form action="/infofilm.php" method="POST">
                <div class="usernom">
                <tr>
                <td><?= $film[0]?></td>
                <td><?= $film[1]?></td>
                <td><?= $film[2]?></td>
                <td><?= $film[4]?></td>
                <td><?= $film[3]?></td>
                </form>
                <form action="affichage/ajoutsceance.php" method="POST"> 
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