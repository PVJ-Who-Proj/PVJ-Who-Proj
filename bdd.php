<?php
/*
$bdd = mysql_connect("sql.free.fr", "jonathan.cortinovis", "123Soleil") or die (mysql_error());  //connexion
mysql_select_db("jonathan_cortinovis", $bdd); //selection de la base

$sql ='SELECT * FROM USER';//création de requête

$req = mysql_query($sql) or die ('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); //envoie de la requête

// on fait une boucle qui va faire un tour pour chaque enregistrement
while($data = mysql_fetch_assoc($req))
    {
    // on affiche les informations de l'enregistrement en cours
    print_r($data);
    } 

mysql_close();
*/

?>


<?php
try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=guesswho','root', '', $pdo_options);

}

catch(Exception $e)
{
	die('Error: '.$e->getMessage());
}
?>



