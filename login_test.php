<?php

session_start();

?>

<?php
include("bdd.php");
$_SESSION['id_juste'] = false;

$reponse = $bdd->query('SELECT login, password FROM utilisateur');


while($donnees = $reponse->fetch())
{
	if($donnees['login'] == $_POST['login'])
	{
		if($donnees['password'] == $_POST['password'])
		{
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['id_juste'] = true;
			header('Location: acceuil.php');
			
		}

	}


	
}

if($_SESSION['id_juste'] == false)
{
	header('Location: login.php');
			
}


?>