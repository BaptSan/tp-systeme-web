<?php 
//On connecte la DB
include_once('db.php');

//On récupère les variables
$email 		= $_POST['email'];
$password 	= $_POST['password'];

//On hash le password
$password = hash('md5', $password);

//On récupère l'utilisateur qui correspond au bon email
$stmt = $db->query("select * from users where email = '$email'");
$user = $stmt->fetch();

//On démarre la session et vérifie que le mot de passe est le bon
session_start();
if($user->password == $password){
	$_SESSION['connected'] 	= true;
	$_SESSION['user_id'] 	= $user->id;
	$_SESSION['name'] 		= $user->name;
	$_SESSION['email'] 		= $user->email;
	header('Location: ../profile');
} else {
	$_SESSION['message'] = ['error' => 'Ces identifiants ne correspondent pas.'];
	header('Location: ../login');
}