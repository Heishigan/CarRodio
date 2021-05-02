<?php
include("../src/backend/includes/autoloader.inc.php");


$ID = $_GET['id'];
$Brands = new BrandsView();
$Details = new CarDetailsView();
$Cars = new CarView();
$Ads = new AdsView();
$CarContr = new CarContr();

$CarContr->DeleteCar($ID);
header("location:admin.php");


