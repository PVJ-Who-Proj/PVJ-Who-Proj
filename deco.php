<?php
 session_start();
 $_SESSION['login'] = false;
 unset($_SESSION['login_user']);
header("Location: acceuil.php");
?>