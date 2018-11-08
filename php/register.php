<?php
session_start();

//On connecte la DB
include_once('db.php');

//On récupère les variables
$name 			= $_POST['name'];
$email 			= $_POST['email'];
$password 		= $_POST['password'];
$password_val 	= $_POST['password_val'];

//Traitement
if(!$_POST['name']){
	$_SESSION['errors']['name'] = 'Vous devez mettre un nom';
}

if(!$_POST['email']){
	$_SESSION['errors']['email'] = 'Vous devez mettre un email';
}

if(!$_POST['password']){
	$_SESSION['errors']['password'] = 'Vous devez mettre un mot de passe';
}

if(!$_POST['password_val']){
	$_SESSION['errors']['password_val'] = 'Vous devez mettre un mot de passe de validation';
}

if($password != $password_val){
	$_SESSION['errors']['password_val'] = 'Les mots de passes sont différents';
}

if(isset($_SESSION['errors'])){
	$_SESSION['fields']['name'] 	= $name;
	$_SESSION['fields']['email'] 	= $email;
	header('Location: ../register');
}

//On hash le password
$password = hash('md5', $password);


//On prépare la requete
$sql = "insert into users (name, email, password, created_at, updated_at) values (:name, :email, :password, :created_at, :updated_at)";
$stmt = $db->prepare($sql);


//On execute et envoie les données
$stmt->execute([
	'name' 			=> $name,
	'email' 		=> $email,
	'password' 		=> $password,
	'created_at' 	=> date('Y-m-d H:i:s'),
	'updated_at' 	=> date('Y-m-d H:i:s'),
]);


$user_id = $db->lastInsertId();

//On connecte l'utilisateur
session_start();
$_SESSION['connected'] 	= true;
$_SESSION['user_id'] 	= $user_id;
$_SESSION['name'] 		= $name;
$_SESSION['email'] 		= $email;

//On redirige vers le profile
header('Location: ../');

unset($db);








