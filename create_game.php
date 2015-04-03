<?php
include("Header.php");
?>

<div class="welcome" id="background_create_game">
	<div class="zone_fond_create_game">
	<form class="create_game" action="create_game_inter.php" method="POST">

		<input type="text" name="game_title" placeholder="Name of the game" autocomplete="off">

		<div class="create_game_checkbox">
			<input id="carre" type="checkbox" name="type_game" value="Two players"/><label for="carre"> Real player</label><br>
			<input id="carrebis" type="checkbox" name="type_game" value="Computer"/><label for="carrebis"> Computer</label> 
		</div>

		<div class="back_butt_block zone_bas_create_game">
			<a class="back_butt_login" id="back_rank" href="accueil_partie.php"><img  src="Ressources/img/back.png"></a>
			<input class="butt_create_game" type="submit" value="">
		</div>
	</div>
</div>