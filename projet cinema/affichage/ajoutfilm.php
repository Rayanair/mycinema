<?php
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$sceance = $bdd->query("SELECT title, room.name, room.number, room.floor, room.seats, movie_schedule.date_begin, movie_schedule.id from movie inner join movie_schedule on movie.id=movie_schedule.id_movie inner join room on room.id=movie_schedule.id_room order by movie_schedule.id asc");
?>