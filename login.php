<?php
include("Header.php")
?>
<div class="welcome" id="background_login">
	<div class="espace_login">
			<h2 class="title_login">
			Please login to continue !
			</h2>

			<form class="form_compte form_login" action="login_test.php" Method ="POST">

			<input type ="text" name ="login" placeholder="User Name" autocomplete="off">
		
			<input type ="password" name="password" placeholder="Password">

			<div class="back_butt_block">
				<a class="back_butt_login" href="acceuil.php"><img  src="Ressources/img/back.png"></a>
				<input type="submit" value="">
			</div>
			<div class="mauvais_log">
				<?php
				if($_SESSION['id_juste'] == false)
				{
					echo("Incorrect login or password");
				}
				?>

			</div>
			</form>
	</div>
	






	<?php
	$_SESSION['id_juste'] = true;
include("Footer.php")
?>