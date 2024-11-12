<?php 
require "affichage/client.php";
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
  <form method="GET">
  <div id="pagination">
    <a href="javascript:history.go(-1)" class="re">Retour</a>
    <?php 
    $i=1;
    $abonnement = (isset($_GET['abonnements'])) ? $_GET['abonnements'] : null;
    for($i; $i<=$nbr_page;$i++){
      echo "<a href='?page=$i&abonnements=$abonnement&affiche=' class='aa'>$i</a>&nbsp;";
    }
    ?>
      <input type="hidden" value="<?=1?>" name='page'>
      <input type="hidden" value="" name='affiche'>
      <select name="abonnements" id="">
        <option value="">Réglage</option>
      <option value="1">10</option>
      <option value="2">30</option>
      <option value="3">50</option>
    </select>

    <input type="submit" name="affiche"></input>
    </form>
  </div>
<?php
        if($allclient->rowCount() > 0){
            ?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">PRENOM</th>
      <th scope="col">NOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DATE DE NAISSANCE</th>
      <th scope="col">ADRESSE</th>
      <th scope="col">CODE POSTAL</th>
      <th scope="col">VILLE</th>
      <th scope="col">PAYS</th>
      <th scope="col">ABONNEMENTS</th>
    </tr>
  </thead>
  <tbody>
   
  
<?php
            while($user = $allclient->fetch())
            {
                ?>
                 <form action="affichage/ajoutabo.php" method="POST">
                <div class="usernom">
                <tr>
                <td><?= $user[0]?></td>
                <td><?= $user[2]?></td>
                <td><?= $user[3]?></td>
                <td><?= $user[1]?></td>
                <td><?= $user[4]?></td>
                <td><?= $user[5]?></td>
                <td><?= $user[6]?></td>
                <td><?= $user[7]?></td>
                <td><?= $user[8]?></td>
                <td>
                  <select name='abonnements' id="">
                      <option value="">Abonnements</option>
                      <option value="1">VIP</option>
                      <option value="2">GOLD</option>
                      <option value="3">Classic</option>
                      <option value="4">Pass Day</option>
                  </select>
                  <input value="<?= $user[0]?>" name="id" style="display: none"/>
                </td>
                <td><input type="submit" name="validate" value="Ajouter"></td>
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
            <p>aucun user</p>
    <?php
        }
    ?>
</body>
</html>