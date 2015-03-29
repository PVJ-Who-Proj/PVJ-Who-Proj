
<?php 
 include("Header.php");

 if($_SESSION['login'] == true)
 {
 	header("Location: accueil_partie.php");
 }
?>


	<div class="welcome" id="background_index" >
		<div>
			<p class="welcome_para welcome_pad"> Welcome to Guess Who! Through this game, you are going to play with your friends or against the computer. It will be a very funny experience for you and your family!! </p>
			<p class="welcome_para"> Just click the following button to continue! </p>
			<a class="next_butt" href="acceuil.php"><img  src="Ressources/img/next.png"></a>
		</div>

	</div>



	
<?php
include("Footer.php");
?>


