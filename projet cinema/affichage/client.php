<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$count = $bdd->prepare("SELECT count(user.id) as cpt from user left join membership on user.id=membership.id_user left join subscription on subscription.id=membership.id_subscription where subscription.id IS NULL and membership.id_user is NULL");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$tcount=$count->fetchAll();
$page=$_GET["page"];
$nbr_element=(isset($_GET["abonnements"]) && !empty($_GET['abonnements'])) ? $_GET['abonnements'] : 20;
if(isset($_GET["affiche"]))
{
    if($_GET['abonnements']==""){
            $nbr_element=20;
    }elseif($_GET['abonnements']=="1"){
            $nbr_element=10;
    }elseif($_GET['abonnements']=="2"){
            $nbr_element=30;
    }
    elseif($_GET['abonnements']=="3"){
        $nbr_element=50;
    }
}
$nbr_page=ceil($tcount[0]['cpt']/intval($nbr_element));
$debut=($page-1)*$nbr_element;
$allclient = $bdd->query("SELECT * from user left join membership on user.id=membership.id_user left join subscription on subscription.id=membership.id_subscription where subscription.id IS NULL and membership.id_user is NULL limit $debut,$nbr_element");
?>