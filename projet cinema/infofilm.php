<?php require "affichage/secance.php" ?>
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
        if($allus->rowCount() > 0){
            ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">TITRE</th>
      <th scope="col">Nom Salle</th>
      <th scope="col">Numero Salle</th>
      <th scope="col">Etage</th>
      <th scope="col">Places</th>
      <th scope="col">Heure Sceance</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($film = $allus->fetch())
            {
                ?>
                <form action="affichage/infofilm.php" method="POST">
                <div class="usernom">
                <tr>
                <td><?= $film[0]?></td>
                <td><?= $film[1]?></td>
                <td><?= $film[2]?></td>
                <td><?= $film[3]?></td>
                <td><?= $film[4]?></td>
                <td><?= $film[5]?></td>
                </tr>
                </div>
                </form>

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