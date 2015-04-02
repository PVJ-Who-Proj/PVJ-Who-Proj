<?php
include("Header.php");
if(isset($_GET['login']))
{
	$_SESSION['login_user'] = $_GET['login'];
}


 ?>


 <div class="welcome" id="background_menu">

	<div class="entour_menu">
		<a id="create_game" href="create_game.php">Create a game</a>
		<a class="taillecube" href="">
			<p id="previous_game" >My<br>previous<br>games</p>
		</a>

		<a class="taillecube2" href="running_games.php">
			<p id="running_games">My<br>running<br>games</p>
		</a>
		<a id="create_game" href="join_game.php">Join game</a>
	</div>
 </div>