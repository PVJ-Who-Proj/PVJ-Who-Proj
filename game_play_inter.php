<?php
session_start();
include("bdd.php");

$id_game = $_POST['id_game'];
$type_question = $_POST['question'];
$login_user = $_SESSION['login_user'];
$reponse = $bdd->query("SELECT id_joueur1, id_joueur2 FROM game WHERE id_game = '$id_game' ");
$donnees = $reponse->fetch();
if($login_user != $donnees['id_joueur1'])
{
	$AuTourDe = $donnees['id_joueur1'];
	$bdd->query("UPDATE game SET AuTourDe = '$AuTourDe' WHERE id_game = '$id_game' ");
	$bdd->query("UPDATE game SET type_question_joueur1 = '$type_question' WHERE id_game = '$id_game' ");
	/*$reponse = $bdd->query("SELECT prenom_pers_joueur1 FROM game WHERE id_joueur2 = '$login_user' AND id_game = '$id_game' ");
	while($donnees = $reponse->fetch())
	{
			$prenom_pers_joueur = $donnees['prenom_pers_joueur1'];

			$reponse = $bdd -> query("SELECT * FROM pnj WHERE id_user != '$login_user' AND nom = '$prenom_pers_joueur' ");
			include("elim_pers.php");
	}*/
switch($type_question){
	case'sexe':
	$bdd->query("UPDATE game SET question_joueur1 = 'Is it a boy?' WHERE id_game ='$id_game' ");
	break;
	case' ouleur_peau':
	$bdd->query("UPDATE game SET question_joueur1 = 'Does the caracter has a white skin?' WHERE id_game ='$id_game' ");
	break;
	
	case'blond':
	$bdd->query("UPDATE game SET question_joueur1 = 'Does the caracter has blond hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'orange':
	$bdd->query("UPDATE game SET question_joueur1 = 'Does the caracter has orange hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'gris':
	$bdd->query("UPDATE game SET question_joueur1 = 'Does the caracter has grey hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'noir':
	$bdd->query("UPDATE game SET question_joueur1 = 'Does the caracter has black hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'haut_rouge':
	$bdd->query("UPDATE game SET question_joueur1 = 'Has he/she got a haut rouge?' WHERE id_game ='$id_game' ");
	break;
	
	case'haut_noir':
	$bdd->query("UPDATE game SET question_joueur1 = 'Has he/she got a haut noir?' WHERE id_game ='$id_game' ");
	break;
	
	case'haut_jaune':
	$bdd->query("UPDATE game SET question_joueur1 = 'Has he/she got a haut jaune?' WHERE id_game ='$id_game' ");
	break;
	case'haut_vert':
	$bdd->query("UPDATE game SET question_joueur1 = 'Has he/she got a haut vert?' WHERE id_game ='$id_game' ");
	break;

	case'haut_bleu':
	$bdd->query("UPDATE game SET question_joueur1 = 'Has he/she got a haut bleu?' WHERE id_game ='$id_game' ");
	break;
	}
	
	$bdd->query("UPDATE game SET question_posee_joueur2 = 1 WHERE id_game = '$id_game' ");

}
	

	


else
{

	$AuTourDe = $donnees['id_joueur2'];
	$bdd->query("UPDATE game SET AuTourDe = '$AuTourDe' WHERE id_game = '$id_game' ");
	$bdd->query("UPDATE game SET type_question_joueur2 = '$type_question' WHERE id_game = '$id_game' AND id_joueur1 <> '$login_user' ");
	/*$reponse = $bdd->query("SELECT prenom_pers_joueur2 FROM game WHERE id_joueur1 = '$login_user' AND id_game = '$id_game' ");
	while($donnees = $reponse->fetch())
	{
		$prenom_pers_joueur = $donnees['prenom_pers_joueur2'];
			$reponse = $bdd -> query("SELECT * FROM pnj WHERE id_user != '$login_user' AND nom = '$prenom_pers_joueur' ");
			include("elim_pers.php");
	}*/
	
	switch($type_question){
	case'sexe':
	$bdd->query("UPDATE game SET question_joueur2 = 'Is it a boy?' WHERE id_game ='$id_game' ");
	break;

	case'couleur_peau':
	$bdd->query("UPDATE game SET question_joueur2 = 'Does the caracter has a white skin?' WHERE id_game ='$id_game' ");
	break;
	
	case'blond':
	$bdd->query("UPDATE game SET question_joueur2 = 'Does the caracter has blond hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'orange':
	$bdd->query("UPDATE game SET question_joueur2 = 'Does the caracter has orange hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'gris':
	$bdd->query("UPDATE game SET question_joueur2 = 'Does the caracter has grey hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'noir':
	$bdd->query("UPDATE game SET question_joueur2 = 'Does the caracter has black hairs?' WHERE id_game ='$id_game' ");
	break;
	
	case'haut_rouge':
	$bdd->query("UPDATE game SET question_joueur2 = 'Has he/she got a haut rouge?' WHERE id_game ='$id_game' ");
	break;
	
	case'haut_noir':
	$bdd->query("UPDATE game SET question_joueur2 = 'Has he/she got a haut noir?' WHERE id_game ='$id_game' ");
	break;
	
	case'haut_jaune':
	$bdd->query("UPDATE game SET question_joueur2 = 'Has he/she got a haut jaune?' WHERE id_game ='$id_game' ");
	break;
	case'haut_vert':
	$bdd->query("UPDATE game SET question_joueur2 = 'Has he/she got a haut vert?' WHERE id_game ='$id_game' ");
	break;

	case'haut_bleu':
	$bdd->query("UPDATE game SET question_joueur2 = 'Has he/she got a haut bleu?' WHERE id_game ='$id_game' ");
	break;

	$bdd->query("UPDATE game SET question_posee_joueur1 = 1 WHERE id_game = '$id_game' ");

	}



}

header("Location: question_posee.php?id_game=$id_game");


