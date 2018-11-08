<?php
include_once('./php/db.php');

if(isset($event_id)){
	$id = $event_id;
} elseif(isset($_GET['event_id'])){
	$id = $_GET['event_id'];
} else {
	echo 'Aucun événement n\'a été spécifié';
	die();
}

$stmt = $db->query("select * from events where id = $id");
$event = $stmt->fetch();