<?php 
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$sceance = $_POST['id'];
$allus = $bdd->query("SELECT title, room.name, room.number, room.floor, room.seats, movie_schedule.date_begin from movie inner join movie_schedule on movie.id=movie_schedule.id_movie inner join room on room.id=movie_schedule.id_room where id_movie like $sceance");
$elfilm = $allus->fetch();
?>