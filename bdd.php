<?php
<<<<<<< HEAD
try
=======

try //appelle de BDD
>>>>>>> origin/master
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=guesswho','root', '', $pdo_options);

}
<<<<<<< HEAD

catch(Exception $e)
{
	die('Error: '.$e->getMessage());
}
=======
catch(Exception $e) //capture du message d'erreur en cas d'erreur
{
	die('Error: '.$e->getMessage());
}

>>>>>>> origin/master
?>