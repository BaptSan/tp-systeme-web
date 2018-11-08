<?php
session_start();

//On connecte la DB
include_once('db.php');

//On prépare les variables
$event_id 	= $_POST['event_id'];
$user_id 	= $_SESSION['user_id'];

//On prépare la requète
$sql  = "delete from events where id = :event_id and user_id = :user_id";
$stmt = $db->prepare($sql);

//On execute et envoie les données
$stmt->execute([
	'event_id' 		=> $event_id,
	'user_id' 		=> $user_id,
]);

//On redirige
header('location: ../');