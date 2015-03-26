<?php
session_start();
include("bdd.php");

$game_title = $_POST['game_title'];
$type_game = $_POST['type_game'];
$login_user = $_SESSION['login_user'];




$req = $bdd->prepare('INSERT INTO game(game_title, type_game, statut_game, id_joueur1) VALUES(:game_title, :type_game, :statut_game, :id_joueur1)');
	$req->execute(array(
		'game_title' => $game_title,
		'type_game' => $type_game,
		'statut_game' => true,
		'id_joueur1' => $login_user
		));

	header("Location: attente_joueur.php");