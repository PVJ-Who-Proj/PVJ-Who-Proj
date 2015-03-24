<?php
include("Header.php")
?>


<div class="welcome" >
	<div class="new_compte">
		<form class="form_compte form_creation_compte" action="creation_compte_inter.php" Method ="POST">
			<input  type="text" name="creer_login" placeholder="New login" style="width:450px" autocomplete="off">

			<input type="password" name="creer_mdp" placeholder="New password" style="width:450px">
			
			<input type="password" name="confirm_mdp" placeholder="Confirm password" style="width:450px">
			<input  type="email" name="adr_mail" placeholder="Email" style="width:450px" autocomplete="off">
			<input  type="date" name="date_naiss" placeholder="test" style="width:450px" autocomplete="off">
			<div class="mauvais_mdp">
				<?php
				if($_SESSION['mdp_correct'] == false)
				{
					echo("Passwords do not match!");
				}
				?>
			</div>
			<div class="back_butt_block">
				<a class="back_butt_login" href="acceuil.php"><img  src="Ressources/img/back.png"></a>
				<input type="submit" value="">
			</div>

		</form>

	</div>
			<img src="Ressources/img/compte.png">
</div>


<?php
include("Footer.php")
?>