<?php
include("Header.php");

if(isset($_POST['gameTitle']) && $_POST['gameTitle'] != "" && $_POST['typeGame'])
{
	$gameTitle = $_POST['gameTitle'];
	$typeGame = $_POST['typeGame'];
	$login = $_SESSION['user'];

	if($typeGame == "Computer")
	{
		$id_joueur2 = "Computeur";
	}
	else
	{
		$id_joueur2 = "";
	}

	$req = $bdd->prepare('INSERT INTO game(game_title, type_game, statut_game, id_joueur1, id_joueur2) 
						  VALUES(:game_title, :type_game, :statut_game, :id_joueur1, :id_joueur2)');
	$req->execute(array(
		'game_title' => $gameTitle,
		'type_game' => $typeGame,
		'statut_game' => false,
		'id_joueur1' => $login,
		'id_joueur2' => $id_joueur2
		));
	$req->closeCursor();

	$reponse = $bdd->prepare("SELECT ID_game
							  FROM game 
							  WHERE game_title = :game_title");
	$reponse->execute(array(
		'game_title' => $gameTitle));
	$donnees = $reponse->fetch();
	$reponse->closeCursor();

	//header("Location: creationPersonnage.php");
}
?>

<div id="createGame">
	<div class="welcome">
		<img class="panneau" src="Ressources/img/create_game.png">
		<form id="create" action="createGame.php" method="POST">
			<input type="text" name="gameTitle" placeholder="Name of the game" autocomplete="off" required="required">
			<div id="radio">
				<input id="tPlayer" type="radio" name="typeGame" value="Two players" required="required"/><label for="tPlayer"> Real player</label><br>
				<input id="computer" type="radio" name="typeGame" value="Computer"/><label for="computer"> Computer</label> 
			</div>
			<a class="back" href="accueilPartie.php">
				<img class="justBack" src="Ressources/img/back.png"><img class="backHover" src="Ressources/img/back_hover.png"><img class="backPush" src="Ressources/img/back_push.png">
			</a>
			<div id="creation">
				<input type="submit" value="">
				<img id="justGame" src="Ressources/img/game.png"><img id="gameHover" src="Ressources/img/game_hover.png"><img id="gamePush" src="Ressources/img/game_push.png">
			</div>
		</form>
	</div>
</div>

<?php
include("footer.php");
?>