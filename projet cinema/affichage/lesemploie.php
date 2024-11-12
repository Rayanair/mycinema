<?php
$bdd = new PDO("mysql:host=localhost; dbname=cinema;" ,"root","");
$employe = $bdd->query("select user.firstname, user.lastname, job.name, employee.date_begin, job.description from user inner join employee on user.id=employee.id_user inner join job on job.id=employee.id_job where job.name != 'Directeur'");
?>