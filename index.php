<?php 
include("Header.php");

if(isset($_SESSION['connexion']) && $_SESSION['connexion'] == true)
{
	header("Location: accueil_partie.php");
}
?>
	<div class="welcome">
			<p id="textHaut">
			 	Welcome to Guess Who ! Through this game, you are going to play with your friends or against the computer. It will be a very funny experience for you and your family ! 
			</p>
			<div><p>Just click the following button to continue </p><a id="next" href="acceuil.php"><img src="Ressources/img/next.png"></a></div>
	</div>

<?php
include("Footer.php");
?>