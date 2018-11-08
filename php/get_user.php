<?php
include_once('./php/db.php');

if(isset($user_id)){
	$id = $user_id;
} elseif(isset($_GET['user_id'])){
	$id = $_GET['user_id'];
} else {
	echo 'Aucun utilisateur n\'a été spécifié';
	die();
}

$stmt = $db->query("select * from users where id = $id");
$user = $stmt->fetch();