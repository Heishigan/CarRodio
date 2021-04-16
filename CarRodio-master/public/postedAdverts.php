<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../src/frontend/assets/css/admin.css" />
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
            <p>Welcome to Your Admin Dashboard</p>
          </div>
        </div>
        <div class="charts">
          <div class="charts__right">
            <div class="charts__right__title">
              <h1>Posted Advertisements<h1>
            </div>
            <div class="charts__right__cards">
              <div class="table-wrapper">
                <table class="showTable">
                  <tr>
                    <th>carid</th>
                    <th>brandname</th>
                    <th>carname</th>
                    <th>model</th>
                    <th>price</th>
                    <th>enginename</th>
                    <th>enginecapacity</th>
                    <th>condition</th>
                    <th>bodytype</th>
                    <th>transmission</th>
                    <th>fueltype</th>
                    <th>mileage</th>
                    <th>image1</th>
                    <th>image2</th>
                    <th>image3</th>
                    <th>image4</th>
                    <th>image5</th>
                    <th>Delete</th>

                  </tr>
                  <?php
                  $conn = mysqli_connect("localhost", "root", "", "cc");
                  $sql = "SELECT * from cars where username='{$_SESSION["username"]}'";
                  $result = $conn->query($sql);
                  ?>
                  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                      <td><?php echo $row['carid'] ?> </td>
                      <td><?php echo $row['brandname'] ?> </td>
                      <td><?php echo $row['carname'] ?> </td>
                      <td><?php echo $row['model'] ?> </td>
                      <td><?php echo $row['price'] ?> </td>
                      <td><?php echo $row['enginename'] ?> </td>
                      <td><?php echo $row['enginecap'] ?> </td>
                      <td><?php echo $row['condition'] ?> </td>
                      <td><?php echo $row['bodytype'] ?> </td>
                      <td><?php echo $row['transmission'] ?> </td>
                      <td><?php echo $row['fueltype'] ?> </td>
                      <td><?php echo $row['mileage'] ?> </td>
                      <?php echo '<td><img src="image/' . $row['image'] . '" style="width:150px;height:100px;"</td>' ?>
                      <?php echo '<td><img src="image/' . $row['image2'] . '" style="width:150px;height:100px;"</td>' ?>
                      <?php echo '<td><img src="image/' . $row['image3'] . '" style="width:150px;height:100px;"</td>' ?>
                      <?php echo '<td><img src="image/' . $row['image4'] . '" style="width:150px;height:100px;"</td>' ?>
                      <?php echo '<td><img src="image/' . $row['image5'] . '" style="width:150px;height:100px;"</td>' ?>
                      <?php echo "<td><a href='deleteAd.php?carid={$row['carid']}'>Delete</a><td>"; ?>
                      <?php echo "<td><a href='editAd.php?carid={$row['carid']}'>Edit</a><td>"; ?>
              </div>
              </td>

              </tr>
            <?php }  ?>
            </table>
            <?php $conn->close(); ?>


            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="sidebar">
      <div class="sidebar__title">
        <div class="sidebar__img">
          <img src="" alt="" />
        </div>
        <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
      </div>
      <div class="sidebar__menu">
        <div class="sidebar__link ">
          <i class="fa fa-car"></i>
          <a href="register.php">Add Vehicle</a>
        </div>
        <div class="sidebar__menu ">
          <div class="sidebar__link">
            <i class="fa fa-user"></i>
            <a href="account.php">Edit User</a>
          </div>
        </div>
        <div class="sidebar__menu active_menu_link">
          <div class="sidebar__link">
            <i class="fa fa-bookmark"></i>
            <a href="postedAdverts.php">View Posted Advertisements</a>
          </div>
        </div>
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