<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$allusers = $bdd->query('SELECT firstname,lastname, subscription.name,subscription.description, subscription.price, subscription.duration, subscription.reduction, membership.id from user inner join membership on user.id=membership.id_user inner join subscription on subscription.id=membership.id_subscription order by membership.id desc');
?>