<?php
include 'database.php';
include 'users.php';
include "db.php";
session_start();
$conn=mysqli_connect("localhost","root","","cc");
 $sql="SELECT * from cars where carid={$_GET["carid"]}";
 $result=$conn->query($sql);
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
          <?php while ($row=mysqli_fetch_assoc($result)) { ?>
      <div class="field">
        <label>car-id:</label>
        <input type="text" value="<?php echo $row['carid'] ?>" name="car-id" readonly>
      </div><br><br>
      <div class="field">
        <label>brand-name:</label>
        <input type="text" value="<?php echo $row['brandname'] ?>"  name="brand" required>
      </div><br><br>
      <div class="field">
        <label>car-name:</label>
        <input type="text" value="<?php echo $row['carname'] ?>" name="name" required>
      </div><br><br>
      <div class="field">
        <label>model:</label>
        <input type="text" value="<?php echo $row['model'] ?>" name="model" required>
      </div><br><br>
      <div class="field">
        <label>price(LKR):</label>
        <input type="number" value="<?php echo $row['price'] ?>" name="price" required>
      </div><br><br>
      <div class="field">
        <label>engine-name:</label>
        <input type="text" value="<?php echo $row['enginename'] ?>" name="engine-name" required>
      </div><br><br>
      <div class="field">
        <label>engine-capacity:</label>
        <input type="text" value="<?php echo $row['enginecap'] ?>" name="engine-capacity" required>
      </div><br><br>
      <div class="field">
        <label>condition:</label>
        <input type="text" value="<?php echo $row['condition'] ?>" name="condition" required>
      </div><br><br>
      <div class="field">
        <label>body-type:</label>
        <input type="text" value="<?php echo $row['bodytype'] ?>" name="body-type" required>
      </div><br><br>
      <div class="field">
        <label>transmission:</label>
        <input type="text" value="<?php echo $row['transmission'] ?>" name="transmission" required>
      </div><br><br>
      <div class="field">
        <label>fuel-type:</label>
        <input type="text" value="<?php echo $row['fueltype'] ?>" name="fuel-type" required>
      </div><br><br>
      <div class="field">
        <label>mileage:</label>
        <input type="text" value="<?php echo $row['mileage'] ?>" name="mileage" required>
      </div><br><br>
      <div class= "">
        <label>image-1:</label>
        <input type="file" name="image" >
      </div>
      <div class="">
        <label>image-2:</label>
        <input type="file" name="image2" >
      </div>
      <div class="">
        <label>image-3:</label>
        <input type="file" name="image3" >
      </div>
      <div class="">
        <label>image-4:</label>
        <input type="file" name="image4" >
      </div><div class="">
        <label>image-5:</label>
        <input type="file" name="image5" >
      </div><br><br>
      <div class="field btn">
        <button type="submit" name="editpost" class="btn">Edit Advert</button>
      </div></div>
      <?php }  ?>
    </form>
    <?php
                if (isset($_POST["editpost"])) {
                      $sql="UPDATE cars 
                      SET 
                          carid = '{$_POST["car-id"]}';
                          brandname = '{$_POST["brand"]}';
                          carname = '{$_POST["name"]}';
                          model = '{$_POST["model"]}';
                          price = '{$_POST["price"]}';
                          enginename = '{$_POST["engine-name"]}';
                          enginecapacity = '{$_POST["engine-capacity"]}';
                          condition = '{$_POST["condition"]}';
                          bodytype = '{$_POST["body-type"]}';
                          transmission = '{$_POST["transmission"]}';
                          fueltype = '{$_POST["fuel-type"]}';
                          mileage = '{$_POST["mileage"]}';
                          WHERE
                          carid = {$_POST["car-id"]}";  
                           if($db->query($sql)){
                            echo "Edit Succesful";
                            header("Location: postedAdverts.php");
                        
        
                        } else {
                          echo "Edit Unsuccesful";
        
                        }; 
                }                        
                        
               
                
            
                        
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
