<?php

session_start();

?>

<?php
include("bdd.php");
$_SESSION['id_juste'] = false;

$reponse = $bdd->query('SELECT login_user, password_user FROM user');


while($donnees = $reponse->fetch())
{
	if($donnees['login_user'] == $_POST['login'])
	{
		if($donnees['password_user'] == $_POST['password'])
		{
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['id_juste'] = true;
			header('Location: accueil_partie.php');
			
		}

	}


	
}

if($_SESSION['id_juste'] == false)
{
	header('Location: login.php');
			
}


?>