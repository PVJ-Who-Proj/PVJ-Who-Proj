<?php
include("Header.php");
$id_game = $_GET['id_game'];
$login_user = $_SESSION['login_user'];
$reponse = $bdd->query("SELECT * FROM pnj WHERE id_game = '$id_game' AND id_user = '$login_user'  ");
while($donnees = $reponse->fetch())
{
	?>

	<div class="personnage">
		<ol>
			<li>
				<img src="Ressources/personnages/<?php echo($donnees['peau']); ?>.png ">
			</li>
			<?php
			if($donnees['barbe'] != "")
			{
				?>
				<li>
					<img src="Ressources/personnages/<?php echo($donnees['barbe']); ?>.png ">
				</li>
				<?php
			}
			if($donnees['moustache'] != "")
			{
				?>
				<li>
					<img src="Ressources/personnages/<?php echo($donnees['moustache']); ?>.png ">
				</li>
				<?php
			}
			?>
			
			<li>
				<img src="Ressources/personnages/<?php echo($donnees['haut']); ?>.png ">
			</li>
			<li>
				<img src="Ressources/personnages/<?php echo($donnees['cheveux']); ?>.png ">
			</li>
			<?php
			if($donnees['collier'] != "")
			{
				?>
				<li>
					<img src="Ressources/personnages/<?php echo($donnees['collier']); ?>.png ">
				</li>
				<?php
			}

			?>
		</ol>


	</div>





	<?php
}








?>