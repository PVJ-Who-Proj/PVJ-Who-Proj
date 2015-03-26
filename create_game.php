<?php
include("Header.php");
?>

<div class="welcome" id="background_create_game">
	<form class="create_game" action="create_game_inter.php" method="POST">
		<input type="text" name="game_title" placeholder="Name of the game">
		<div class="create_game_checkbox">
		<input type="checkbox" name="type_game" value="joueur"> Real player
		<input type="checkbox" name="type_game" value="ordi"> Computer
		</div>
		<input type="submit" value="create">




</div>