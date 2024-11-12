<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");

$allfilm = $bdd->query('SELECT title, distributor.name, genre.name, movie.id  from movie inner join movie_genre on movie.id=id_movie inner join genre on genre.id=id_genre inner join distributor on distributor.id=movie.id_distributor order by movie.id asc');
if(!empty($_GET['t'])){
    $recherchedis = htmlspecialchars($_GET['d']); 
    $recherchefilm = htmlspecialchars($_GET['s']);
    $recherchegenre = htmlspecialchars($_GET['g']);
    $recherchedate = htmlspecialchars($_GET['t']);
    $allfilm = $bdd->query('SELECT DISTINCT title, distributor.name, genre.name, movie.id from movie inner join movie_schedule on movie.id=movie_schedule.id_movie inner join room on room.id=movie_schedule.id_room inner join movie_genre on movie.id=movie_genre.id_movie inner join genre on genre.id=movie_genre.id_genre inner join distributor on distributor.id=movie.id_distributor where date_begin like "%' . $recherchedate .'%" AND movie.title like "%' . $recherchefilm.'%" AND distributor.name like "%' . $recherchedis .'%" AND genre.name like "%' . $recherchegenre.'%"');
}elseif(isset($_GET['s']) OR !empty($_GET['s']) OR isset($_GET['g']) OR !empty($_GET['g']) OR isset($_GET['d']) OR !empty($_GET['d'])){
    $recherchedis = htmlspecialchars($_GET['d']); 
    $recherchefilm = htmlspecialchars($_GET['s']);
    $recherchegenre = htmlspecialchars($_GET['g']); 
    $allfilm = $bdd->query('SELECT DISTINCT title, distributor.name, genre.name, movie.id from movie inner join movie_schedule on movie.id=movie_schedule.id_movie inner join room on room.id=movie_schedule.id_room inner join movie_genre on movie.id=movie_genre.id_movie inner join genre on genre.id=movie_genre.id_genre inner join distributor on distributor.id=movie.id_distributor where movie.title like "%' . $recherchefilm.'%" AND distributor.name like "%' . $recherchedis .'%" AND genre.name like "%' . $recherchegenre.'%" ');
}
?>