<?php
include 'db.php';
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
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
              <p>Welcome to your Seller Dashboard</p>
            </div>
          </div>
          
          <div class="charts">
            <div class="charts__left">
            <div class="charts__left__title">
               <h1> Edit your seller profile details</h1></div>
                <div class="charts__left__cards">
                  <br> 
                <form method="post" required action="account.php">
                <label>Username</label><br>
                  <div class="field">
                      <input type="text" required  name="uname" >
                  </div>
                  <br><br>
                  <label>Email</label><br>
                  <div class="field">
                      <input type="email" required name="email" value=" <?php echo $_SESSION['username']; ?>">
                  </div>
                  <br><br>
                  <div class="field btn">
                      <div class="btn-layer"></div>
                      <input type="submit" name="" value="Change Profile Details">>
                  </div>
                </form>
            
            </div>
          </div>
          <div class="charts__right">
            <div class="charts__right__title">
               <h1> Edit password</h1></div>
               <div class="charts__right__cards">
               <form method="post" required action="account.php">
                <label>Old Password</label><br>
                  <div class="field">
                      <input type="password" required  name="opass">
                  </div>
                  <br><br>
                  <label>New Password</label><br>
                  <div class="field">
                      <input type="password" required name="npass">
                  </div>
                  <br><br>
                  <label>Confirm New Password</label><br>
                  <div class="field">
                      <input type="password" required name="cpass">
                  </div>
                  <br><br>
                  <div class="field btn">
                      <div class="btn-layer"></div>
                      <input type="submit" name="submit" value="Change Password">
                  </div>
                </form>
                <?php
                 
                if (isset($_POST["submit"])) {
                  $pw=$_POST['opass'];
                  $pw=md5($pw);
                  $npw=$_POST['npass'];
                  $npw=md5($npw);
                  $sql = "select * from users where password='{$pw}' and email='{$_SESSION["username"]}'";
                  $result = $db->query($sql);
                  if ($result->num_rows > 0) {
                    if ($_POST["npass"] == $_POST["cpass"]) {
                      $s = "update users SET password='{$npw}' where email='{$_SESSION["username"]}'";
                      $db->query($s);
                      echo "Password succesfully changed";
                    } else {
                      echo "New passwords don't match";
                    }
                  } else {
                    echo "Invalid Existing Password. Please check again.";
                  }
                }
                ?>
                 
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
            <div class="sidebar__link  active_menu_link">
            <i class="fa fa-user"></i>
            <a href="account.php">Edit User</a>
          </div>
          <div class="sidebar__menu">       
            <div class="sidebar__link">
            <i class="fa fa-bookmark"></i>
            <a href="postedAdverts.php">View Posted Advertisements</a>
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

