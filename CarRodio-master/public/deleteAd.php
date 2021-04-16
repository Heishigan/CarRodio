<?php
	include "db.php";
	session_start();
	$s="delete from cars WHERE carid={$_GET["carid"]}";
	$db->query($s);
	header("Location: postedAdverts.php");

?>