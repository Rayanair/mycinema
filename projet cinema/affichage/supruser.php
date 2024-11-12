<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$allus = $bdd->query('SELECT firstname,lastname, subscription.name,subscription.description, subscription.price, subscription.duration, subscription.reduction, membership.id from user inner join membership on user.id=membership.id_user inner join subscription on subscription.id=membership.id_subscription order by membership.id desc');
$user = $allus->fetch();
if(isset($_POST['validate'])){
        $insertUserOnWebsite = $bdd->query("DELETE FROM membership WHERE id='$user[7]'");
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>