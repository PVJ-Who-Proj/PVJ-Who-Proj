<?php
include("Header.php");
$id_game = $_GET['id_game'];
$login_user = $_SESSION['login_user'];
$prenom_pers_joueur = "";
$reponse = $bdd->query("SELECT id_joueur1, id_joueur2 FROM game WHERE id_game = '$id_game' ");
$donnees = $reponse->fetch();
?>
<div class="background_personnage">
	<div class="encadre_personnage">
		<?php
		if($donnees['id_joueur1'] == $login_user)
		{
			$joueur_adverse = $donnees['id_joueur2'];
			$reponse = $bdd->query("SELECT * FROM pnj WHERE id_game = '$id_game' AND id_user = '$joueur_adverse' "); //affiche la palette de personnage du joueur adverse
			include("affiche_personnage.php");
			$reponse = $bdd->query("SELECT prenom_pers_joueur1 FROM game WHERE id_joueur1 = '$login_user' "); //récupère le nom du personnage choisi au hasard
			$donnees = $reponse->fetch();
			$prenom_pers_joueur = $donnees['prenom_pers_joueur1'];
			$reponse = $bdd -> query("SELECT * FROM pnj WHERE id_user = '$login_user' AND nom = '$prenom_pers_joueur' "); //affiche ce personnage
			
			
		}
		else
		{
			$joueur_adverse = $donnees['id_joueur1'];
			$reponse = $bdd->query("SELECT * FROM pnj WHERE id_game = '$id_game' AND id_user = '$joueur_adverse'  ");
			include("affiche_personnage.php");
			$reponse = $bdd->query("SELECT prenom_pers_joueur2 FROM game WHERE id_joueur2 = '$login_user' ");
			$donnees = $reponse->fetch();
			$prenom_pers_joueur = $donnees['prenom_pers_joueur2'];
			$reponse = $bdd -> query("SELECT * FROM pnj WHERE id_user = '$login_user' AND nom = '$prenom_pers_joueur' ");
			
			
		}
		?> <div class="pers_joueur"> <?php
		?> <p>Your opponent has to find this people!</p> <?php
		include("affiche_personnage.php");
		?> </div>

	</div>
	<a class="back_butt_login" id="back_gameplay" href="running_games.php"><img  src="Ressources/img/back.png"></a>
</div>

