<?php
include("bdd.php");
session_start();

$login= $_POST['creer_login'];
$password = $_POST['creer_mdp'];
$confirm = $_POST['confirm_mdp'];
$adr_mail = $_POST['adr_mail'];
$_SESSION['mdp_correct'] = true;



if($password <> $confirm)
{
	$_SESSION['mdp_correct'] = false;
	header('Location: creation_compte.php');	

}
else
{

	$req = $bdd->prepare('INSERT INTO USER(login_user, password_user, email_user) VALUES(:login_user, :password_user, :email_user');
	$req->execute(array(
		'login_user'=> $login,
		'password_user' => $password,
		'email_user' => $adr_mail
		));

	mail('clayette.pierre@gmail.com' , 'Thanks for the register!', 'Thanks for the register!!', 'From: clayette.pierre@gmail.com');


	header('Location: acceuil.php');

}





?>