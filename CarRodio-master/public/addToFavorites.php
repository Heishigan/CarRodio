<?php
	include"database.php";
  include 'users.php';
  include"db.php";

	session_start();
	if(!isset($_SESSION["buyerID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
  $ID = $_GET['id'];
  
  $sql="SELECT ID from ad WHERE CarDetailsID = '$ID'";
  $result=$db->query($sql);
  while ($row = $result->fetch_assoc()) {
    $ID= $row['ID']."<br>";
}

  $UID = $_SESSION["buyerID"];
  echo $ID;
  echo $UID;
 
  $users = new user();
  $users->addToFavorites($UID, $ID);
