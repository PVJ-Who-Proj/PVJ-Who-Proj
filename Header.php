<?php
session_start();
include("bdd.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Article and picture blog"/>
		<link rel="stylesheet" type="text/css" href="GuessWho.css "/>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<title>PVJGuessWho.com</title>
	</head>
	<body>
		<section class="integral">
			<div class="haut_page">
				<div class="logo">
					<img id="img_logo" src="Ressources/img/Logo_Guess_Who.png">
					<?php
					if(isset($_SESSION['login']))
					{
						if( $_SESSION['login'] == true )
							{
								?>
								<form action="deco.php">
									<input class="deco_butt" type="submit" value="">
								</form>
								<?php
							}


					}
					

					?>
				</div>
			</div>

			


			

