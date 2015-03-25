<?php
include("Header.php");

$reponse = $bdd->query("SELECT login_user, nbWin_user, nbPlayed_user, ROUND(nbWin_user/nbPLayed_user, 2) AS ratio FROM user ORDER BY ratio DESC");

$rank = 1;

?>

<div class="welcome" id="background_rank">
	
<div class="tableau">
	<TABLE class="classement_tableau">


		<TR class="haut_tableau">
			<TH>
				Rank
			</TH>
			<TH>
				Name
			</TH>
			<TH>
				Matches played
			</TH>
			<TH>
				Matches won
			</TH>
			<TH>
				Ratio
			</TH>

		</TR>

			<?php
			while($donnees = $reponse -> fetch())
			{
				?>
				<TR class="ligne_tableau">
					<TH>
						<?php
							echo($rank);
						?>
					</TH>
					<TH>
						<?php
						echo($donnees['login_user']);
						?>
					</TH>
					<TH>
						<?php
						echo($donnees['nbWin_user']);
						?>
					</TH>
					<TH>
						<?php
						echo($donnees['nbPlayed_user']);
						?>
					</TH>
					<TH>
						<?php
						echo($donnees['ratio']);
						$rank++;
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
	