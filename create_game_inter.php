<?php
session_start();
include("bdd.php");

$game_title = $_POST['game_title'];
$type_game = $_POST['type_game'];
$login_user = $_SESSION['login_user'];

if($type_game == "Computer")
{
	$id_joueur2 = "Computeur";
}
else
{
	$id_joueur2 = "";
}

/* FAIRE CETTE PUTAIN DE VERIF */


$req = $bdd->prepare('INSERT INTO game(game_title, type_game, statut_game, id_joueur1, id_joueur2) VALUES(:game_title, :type_game, :statut_game, :id_joueur1, :id_joueur2)');
	$req->execute(array(
		'game_title' => $game_title,
		'type_game' => $type_game,
		'statut_game' => false,
		'id_joueur1' => $login_user,
		'id_joueur2' => $id_joueur2
		));



$reponse = $bdd->query("SELECT ID_game, id_joueur1 FROM game WHERE game_title = '$game_title' ");
	$donnees = $reponse->fetch();

	header("Location: creation_personnage.php?id_user=$donnees[id_joueur1]&id_game=$donnees[ID_game]");



