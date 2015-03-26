<?php
include("bdd.php");
session_start();

$login = mysql_real_escape_string($_POST['creer_login']);
$password = mysql_real_escape_string($_POST['creer_mdp']);
$confirm = mysql_real_escape_string($_POST['confirm_mdp']);
$adr_mail = mysql_real_escape_string($_POST['adr_mail']);
$login = addslashes($login);
$password = addslashes($password);
$confirm = addslashes($confirm);
$adr_mail = addslashes($adr_mail);
$login = htmlspecialchars($login);
$password = htmlspecialchars($password);
$confirm = htmlspecialchars($confirm);
$adr_mail = htmlspecialchars($adr_mail);

if(empty($password) || empty($login) || empty($adr_mail)){
	$_SESSION['mdp_vide'] = false;
	header('location: creation_compte.php');
}

if($password <> $confirm)
{
	$_SESSION['mdp_correct'] = false;
	header('Location: creation_compte.php');	
}
else
{
	$req = $bdd->prepare('INSERT INTO user(login_user, password_user, email_user) VALUES(:login_user, :password_user, :email_user)');
	$req->execute(array(
		'login_user'=> $login,
		'password_user' => $password,
		'email_user' => $adr_mail
		));
	$_SESSION['login'] = true;
	header('Location: accueil_partie.php');
}
?>