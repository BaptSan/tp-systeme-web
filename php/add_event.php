<?php
session_start();

//On récupère les variables
$name 		= $_POST['name'];
$place 		= $_POST['place'];
$date 		= $_POST['date'];
$body 		= $_POST['body'];

//On connecte la DB
include_once('db.php');

//On prépare la requete
$sql = "insert into events (user_id, name, place, date, body, created_at, updated_at) values (:user_id, :name, :place, :date, :body, :created_at, :updated_at)";
$stmt = $db->prepare($sql);

//On envoie les données
$stmt->execute([
	'user_id' 		=> $_SESSION['user_id'],
	'name' 			=> $name,
	'place' 		=> $place,
	'date' 			=> $date.' 00:00:00',
	'body' 			=> $body,
	'created_at' 	=> date('Y-m-d H:i:s'),
	'updated_at' 	=> date('Y-m-d H:i:s'),
]);

$event_id = $db->lastInsertId();

//On redirige vers le profile
header("Location: ../event?event_id=$event_id");
unset($db);