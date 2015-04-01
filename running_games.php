<?php
include("Header.php");
$login_user = $_SESSION['login_user'];
$reponse = $bdd->query("SELECT game_title, type_game, id_joueur1, id_joueur2 FROM game WHERE id_joueur1 = '$login_user' OR id_joueur2 = '$login_user' ");
?>


<div class="welcome" id="background_running_games">


<div class="tableau">
	<TABLE class="classement_tableau">




		<TR class="haut_tableau">
			<TH>
				Name
			</TH>
			<TH>
				Type of game
			</TH>
			<TH>
				Player 1
			</TH>
			<TH>
				Player 2
			</TH>

		</TR>

			<?php
			while($donnees = $reponse -> fetch())
			{
				?>
				<TR class="ligne_tableau_game">
					<TH>
						<?php
							echo($donnees['game_title']);
						?>
					</TH>
					<TH>
						<?php
						echo($donnees['type_game']);
						?>
					</TH>
					<TH>
						<?php
						echo($donnees['id_joueur1']);
						?>
					</TH>
					<TH>
						<?php
						echo($donnees['id_joueur2']);
						?>
					</TH>
				</TR>


				<?php
			}







			?>


		</TR>	



	</TABLE>


</div>


<a class="back_butt_login" id="back_rank" href="acceuil.php"><img  src="Ressources/img/back.png"></a>
</div>