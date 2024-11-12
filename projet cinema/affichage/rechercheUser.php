<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$alluser = $bdd->query('SELECT * from user inner join membership on user.id=membership.id_user inner join subscription on subscription.id=membership.id_subscription order by membership.id asc');
if(isset($_GET['r']) AND !empty($_GET['r'])){
    $rechercheuser = htmlspecialchars($_GET['r']);
    $alluser = $bdd->query('SELECT * from user inner join membership on user.id=membership.id_user inner join subscription on subscription.id=membership.id_subscription where firstname like "%' . $rechercheuser.'%" OR lastname like "%' . $rechercheuser.'%" order by membership.id asc');
}
?>