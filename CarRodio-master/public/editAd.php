<?php
include("../src/backend/includes/autoloader.inc.php");
    if (isset($_GET['id']) /*you can validate the link here*/) {
      $_SESSION['ID'] = $_GET['id'];
    }
$ID = $_GET['id'];
    $Brands = new BrandsView();
    $Details = new CarDetailsView();
    $Cars = new CarView();
    $carcontr = new CarContr();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/admin.css" />
    <title>Seller Dashboard</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars"></i>
      </nav>

      <main>
        <div class="main__container">
          <div class="main__title">
            <img src="" />
            <div class="main__greeting">
              <p>Welcome to your Seller Dashboard</p>
            </div>
          </div>

          <div class="charts">
            <div class="charts__left">
            <div class="charts__left__title">
               <h1> Edit a  Advertisement</h1></div>
                <div class="charts__left__cards">
          <br>
          <form method="post" action="editAD.php" enctype="multipart/form-data">

 
    <?php
  $Details->showEditDetail($ID);
        ?>
    
    </form>
    <?php

                if (isset($_POST["editpost"])) {
      // $sql="UPDATE cars 
      // SET 
      //     carid = '{$_POST["car-id"]}';
      //     brandname = '{$_POST["brand"]}';
      //     carname = '{$_POST["name"]}';
      //     model = '{$_POST["model"]}';
      //     price = '{$_POST["price"]}';
      //     enginename = '{$_POST["engine-name"]}';
      //     enginecapacity = '{$_POST["engine-capacity"]}';
      //     condition = '{$_POST["condition"]}';
      //     bodytype = '{$_POST["body-type"]}';
      //     transmission = '{$_POST["transmission"]}';
      //     fueltype = '{$_POST["fuel-type"]}';
      //     mileage = '{$_POST["mileage"]}';
      //     WHERE
      //     carid = {$_POST["car-id"]}";  
      //      if($db->query($sql)){
      //       echo "Edit Succesful";
      //       header("Location: postedAdverts.php");
      $carname = $_POST["name"];
      $brandname = $_POST["brand"];
      $model = $_POST["model"];
      $price = $_POST["price"];
      $condition = $_POST["condition"];
        $carcontr->UpdateCars($carname, $brandname, $model, $price, $condition,  $_SESSION['ID']);
        
                        } else {
                          echo "Edit Unsuccesful";
        
                        }; 
                   
               
                
            
                        
                ?>

                <div>
            </div>
          </div>

        </div>
      </main>
      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="" alt="" />
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>
        <div class="sidebar__menu">
            <div class="sidebar__link">
            <i class="fa fa-car"></i>
            <a href="register.php">Add Vehicle</a>
          </div>
          <div class="sidebar__menu">       
            <div class="sidebar__link">
            <i class="fa fa-user"></i>
            <a href="account.php">Edit User</a>
          </div>
          <div class="sidebar__menu">       
            <div class="sidebar__link">
            <i class="fa fa-bookmark"></i>
            <a href="postedAdverts.php">View Posted Advertisements</a>
          </div>
          <div class="sidebar__menu active_menu_link">       
            <div class="sidebar__link">
            <i class="fa fa-pencil"></i>
            <a href="postedAdverts.php">Edit Advertisement</a>
          </div></div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="logout.php">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="js/index.js"></script>
  </body>
</html>
