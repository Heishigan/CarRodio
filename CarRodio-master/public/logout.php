<?php
	include "database.php";
	session_start();
	
	session_destroy();
	unset ($_SESSION["buyerID"]);
	unset ($_SESSION["username"]);
	header("Location: index.php");
?>