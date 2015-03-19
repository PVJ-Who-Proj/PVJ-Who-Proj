<?php
include("Header.php");
$_SESSION['mdp_correct'] = true;
$_SESSION['login_pris'] =false;
?>

<div class="welcome">
	<div>
		<ol class="liste_acceuil">
			<a href="login.php">
				<li id="login_liste_acceuil">
					Login!
				</li>
			</a>
			<a href="creation_compte.php">
				<li>
					Create your own account!
				</li>
			</a>
			<a href="">
				<li>
					Check ranking
				</li>
			</a>
			<a href="">
				<li>
					Read the rules here!
				</li>
			</a>
		</ol>
		<a class="back_butt" href="index.php"><img  src="Ressources/img/back.png"></a>
	</div>

	<img src="Ressources/img/before.png">
</div>


<?php
include("Footer.php");
?>