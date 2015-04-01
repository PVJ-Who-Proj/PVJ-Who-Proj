<?php
	include('Header.php');
?>
<div>
	<h3>Game overview</h3>
	<p>
		Guess Who is a two player game where players use differential yes or no questions to isolate a hidden character. The first player to guess the other players hidden character wins.
	</p>
	<h3>Game setup</h3>
	<p>
		Each player takes their game board of 24 faces and places one of 24 mystery cards in the empty frame in each game board. This card represents the character your opponent has to guess and the character you have to answer questions about.
		The youngest player goes first, beginning by asking the other player a characteristic found on on one of their 24 visible characters (both players have the same 24 tiles). Example: “ Does your character have brown hair?”
		If they say, “yes,” the asking player flips over all of the characters without brown hair. If they say, “no,” the asking player flips over the characters that have brown hair. Through the process of elimination, players will eventually be able to “guess” the name of the opponents character.
	</p>
	<h3>Winning the game</h3>
	<p>
		Each player gets one yes or no question per turn and may only guess (to win the game) once per game. If a player successfully guesses their opponents hidden character then they win; if their guess is wrong then they lose.
	</p>
</div>
<div class="back_butt_rules">
	<a class="butt_rules" href="acceuil.php"><img  src="Ressources/img/back.png"></a>
</div>
<?php
include("Footer.php");
?>