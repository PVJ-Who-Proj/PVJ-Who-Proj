<!doctype html>
<?php
session_start(); //lancement de session

include("Fonction.php"); //integration de la page de focntion

try //appelle de BDD
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=guesswho','root', '', $pdo_options);

}
catch(Exception $e) //capture du message d'erreur en cas d'erreur
{
	die('Error: '.$e->getMessage());
}

?>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Jeu par navigateur, reprend les grands principes de GuessWho"/>
		<link rel="stylesheet" type="text/css" href="GuessWho.css "/>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<title>GuessWho.com</title>
	</head>
	<body>
		<header>
			<img id="img_logo" src="Ressources/img/Logo_Guess_Who.png">
			<?php
			if(isset($_SESSION['connexion']) && $_SESSION['connexion'] == true) //test qui determine si un utilisateur est connecté ou non
			{
				?>
				<a id="deco" href="deco.php"><img src="Ressources/img/yellow_logout_butt.png"></a>
				<?php
			}
			?>
		</header>
		<section>