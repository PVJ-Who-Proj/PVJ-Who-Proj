<?php
include("Header.php");
$id_game = $_GET['id_game'];
$login_user = $_SESSION['login_user'];
$reponse = $bdd->query("SELECT * FROM pnj WHERE id_game = '$id_game' AND id_user = '$login_user'  ");
while($donnees = $reponse->fetch())
{
	?>
		<div class="personnages">
			
				<img id = "peau" class="vetement" src="Ressources/personnages/<?php echo($donnees['peau']); ?>.png ">
		
			<?php
			if($donnees['moustache'] != "")
			{
				?>
				
					<img id = "moustache" class="vetement" src="Ressources/personnages/<?php echo($donnees['moustache']); ?>.png ">
				
				<?php
			}
			?>
			
			
				<img id = "haut" class="vetement" src="Ressources/personnages/<?php echo($donnees['haut']); ?>.png ">
				<?php
			if($donnees['barbe'] != "")
			{
				?>
				
					<img id = "barbe" class="vetement" src="Ressources/personnages/<?php echo($donnees['barbe']); ?>.png ">
				
				<?php
			}
				?>
			
				<img id = "cheveux" class="vetement" src="Ressources/personnages/<?php echo($donnees['cheveux']); ?>.png ">
			
			<?php
			if($donnees['collier'] != "")
			{
				?>
				
					<img id = "collier" class="vetement" src="Ressources/personnages/<?php echo($donnees['collier']); ?>.png ">
				
				<?php
			}

			?>
		</div>







	<?php
}








?>