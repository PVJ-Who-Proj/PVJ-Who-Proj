<?php
include("bdd.php");
session_start();
$id_joueur1 = $_POST['id_joueur1'];
$id_joueur2 = $_SESSION['login_user'];
$reponse = $bdd->query("SELECT ID_game FROM game WHERE id_joueur1 = '$id_joueur1'");
while($donnees = $reponse->fetch())
{
	$id_game = $donnees['ID_game'];
}

$bdd->query("UPDATE game SET id_joueur2 = '$id_joueur2' WHERE id_joueur1 = '$id_joueur1' ");
$bdd->query("UPDATE game SET statut_game = 1 WHERE id_joueur1 = '$id_joueur1' ");

	header("Location: creation_personnage.php?id_user=$id_joueur2&id_game=$id_game");

?>




