<?php
include("../src/backend/includes/autoloader.inc.php");


$favcontr = new FavouritesContr();
$favcontr->DeleteFavourites();
header("location:test.php");
