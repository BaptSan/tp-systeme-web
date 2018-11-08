<?php
if(isset($_SESSION['connected']) &&  $_SESSION['connected'] === true){

	include_once('./php/db.php');

	$id = $_SESSION['user_id'];
	$stmt = $db->query("select * from users where id = $id");
	$auth = $stmt->fetch();

} else {
	header('Location: ./login');
}