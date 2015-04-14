<?php

session_start();

?>

<?php
include("header.php");
$_SESSION['id_juste'] = false;

$reponse = $bdd->query('SELECT login_user, password_user FROM user');


while($donnees = $reponse->fetch())
{
	if($donnees['login_user'] == $_POST['login'])
	{
		if($donnees['password_user'] == $_POST['password'])
		{
			$login_user = $_POST['login'];
			$_SESSION['id_juste'] = true;
			$_SESSION['connexion'] = true;
			header("Location: accueil_partie.php?login=$login_user");
			
		}

	}


	
}

if($_SESSION['id_juste'] == false)
{
	header('Location: login.php');
			
}


?>