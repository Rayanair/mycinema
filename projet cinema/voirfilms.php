<?php 
require "affichage/rechercheFilm.php"; 
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
     <input type="search" name="s" placeholder="Recherche de films" class="rech">
     <input type="search" name="d" placeholder="Recherche de distrib" class="rech">
     <input type="search" name="g" placeholder="Recherche de genre" class="rech">
     <input type="date" name="t" placeholder="Recherche de date" class="rech">
     <input type="submit" name="envoyer"  class="button">
  </form>
</div>
<section class="affiche_film">
    <?php
        if($allfilm->rowCount() > 0){
            ?>
    <table class="table">
  <thead >
    <tr>
    <th scope="col">ID</th>
      <th scope="col">TITRE</th>
      <th scope="col">DISTRIBUTEUR</th>
      <th scope="col">GENRE</th>
      <th scope="col">Scéances</th>
      <th scope="col">Salles</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($film = $allfilm->fetch())
            {
                ?>
                <form action="/infofilm.php" method="POST">
                <div class="usernom">
                <tr>
                <td><?= $film[3]?></td>
                <td><?= $film[0]?></td>
                <td><?= $film[1]?></td>
                <td><?= $film[2]?></td>
                <input value="<?= $film[3]?>" name="id" style="display: none"/>
                <td><input type="submit" value="Voir"/></td>
                </form>
                <form action="affichage/ajoutsceance.php" method="POST"> 
                <td>
                    <select name='abonnements' id="">
                        <option value="">Salles</option>
                        <option value="1">Montana</option>
                        <option value="2">Highscore</option>
                        <option value="3">Salle 3</option>
                        <option value="4">Astek</option>
                        <option value="5">Gecko</option>
                        <option value="6">Azure</option>
                        <option value="7">Toshiba</option>
                        <option value="8">Salle 14</option>
                        <option value="9">Asus</option>
                        <option value="10">Salle 16</option>
                        <option value="11">Microsoft</option>
                        <option value="12">VIP</option>
                        <option value="13">Golden</option>
                        <option value="14">Salle 23</option>
                        <option value="15">Lenovo</option>
                        <option value="16">Salle 31</option>
                        <option value="17">Huawei</option>
                    </select>
                    <input value="<?= $film[3]?>" name="id" style="display: none"/>
                  </td>
                  <td><input type="submit" value="Ajouter" name="validate"/></td>
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