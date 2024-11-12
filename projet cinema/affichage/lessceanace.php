<?php
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$ajout = $bdd->query("SELECT title, room.name, room.number, room.floor, room.seats, movie_schedule.date_begin, movie_schedule.id from movie inner join movie_schedule on movie.id=movie_schedule.id_movie inner join room on room.id=movie_schedule.id_room order by movie_schedule.id asc");
$id_member = $_GET['id'];
$id_film = $_GET['film'];
echo($id_member);
echo($id_film);
$bdd->query("INSERT INTO membership_log (id_membership, id_session) VALUES ($id_member,$id_film)");
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
