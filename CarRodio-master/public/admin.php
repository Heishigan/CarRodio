<?php
include 'database.php';
include 'users.php';
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../src/frontend/assets/css/admin.css" />
    <title>Advertisment Management</title>
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
            <img src=""/>
            <div class="main__greeting">
              <p>Welcome to Your Admin Dashboard</p>
            </div>
          </div>
          <div class="charts">
            <div class="charts__right">
              <div class="charts__right__title">
			  <h1>Advertisement yet to be verified<h1>
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
    <!-- <th>select</th> -->
    <th>verify</th>
    <th>delete</th>

 </tr>
<?php
 $conn=mysqli_connect("localhost","root","","cc");
 $sql="SELECT * from cars";
 $result=$conn->query($sql);
 $val;

 ?>
 <?php while ($row=mysqli_fetch_assoc($result)) { ?>
   <form method="post" action="admin.php" enctype="multipart/form-data">
  <tr>
    <td><?php echo $row['carid'] ?> </td>
    <td><?php echo $row['brandname']?> </td>
    <td><?php echo $row['carname'] ?> </td>
    <td><?php echo $row['model'] ?> </td>
    <td><?php echo $row['price'] ?> </td>
    <td><?php echo $row['enginename'] ?> </td>
    <td><?php echo $row['enginecap']?> </td>
    <td><?php echo $row['condition'] ?> </td>
    <td><?php echo $row['bodytype']?> </td>
    <td><?php echo $row['transmission'] ?> </td>
    <td><?php echo $row['fueltype']?> </td>
    <td><?php echo $row['mileage'] ?> </td>
    <?php echo '<td><img src="image/' .$row['image'].'" style="width:150px;height:100px;"</td>' ?>
    <?php echo '<td><img src="image/' .$row['image2'].'" style="width:150px;height:100px;"</td>' ?>
    <?php echo '<td><img src="image/' .$row['image3'].'" style="width:150px;height:100px;"</td>' ?>
    <?php echo '<td><img src="image/' .$row['image4'].'" style="width:150px;height:100px;"</td>' ?>
    <?php echo '<td><img src="image/' .$row['image5'].'" style="width:150px;height:100px;"</td>' ?>
    <!-- <td><input type="checkbox" name="key" value="<?php echo $row['carid'];?>" required</td> -->
    <td><a href="admin.php?verify=<?php echo $row['carid'];?>" class="btn-warning">verify</td>
    <td><a href="admin.php?delete=<?php echo $row['carid'];?>" class="btn-warning">delete</td>
    </div>
  </td>

  </tr>
  </form>
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
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-check" aria-hidden="true"></i>
            <a href="addStudent.php">Verify Car</a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="logout.php">Log out</a>
          </div>
        </div>
      </div>
	</div>
	<script src="script.js"></script>
  </body>
</html>

<?php if (isset($_GET['verify'])){
     $id=$_GET['verify'];
    echo "<script>alert(dfef);</script>";
     $users = new user();
     $users->verifyadd($id);

}

if (isset($_GET['delete'])) {
   $id=$_GET['delete'];
   $users = new user();
   $users->deleteadd($id);
}
  ?>
