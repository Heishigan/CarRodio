<?php
session_start();
include 'database.php';
include 'users.php';

include("../src/backend/includes/autoloader.inc.php");



$Ads = new AdsView();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Advertisment Management</title>
  <!-- jQuery -->
  <script src="../src/frontend/assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>


  <!-- Bootstrap4 files-->
  <script src="../src/frontend/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <link href="../src/frontend/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="../src/frontend/assets/css/nav.css" rel="stylesheet" type="text/css" />
  <!-- Font awesome 5 -->
  <link href="../src/frontend/assets/css/all.min.css" type="text/css" rel="stylesheet">

  <!-- plugin: fancybox  -->
  <script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
  <link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

  <!-- custom style -->
  <link href="../src/frontend/assets/css/ui.css" rel="stylesheet" type="text/css" />
  <link href="../src/frontend/assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

  <!-- custom javascript -->
  <script src="../src/frontend/assets/js/script2.js" type="text/javascript"></script>

  <script type="text/javascript">
    /// some script

    // jquery ready start
    $(document).ready(function() {
      // jQuery code

    });
    // jquery end
  </script>
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
            <p>Welcome to Your Seller Dashboard</p>
          </div>
        </div>
        <div class="charts">
          <div class="charts__right">
            <div class="charts__right__title">
              <h1>Advertisments posted by you<h1>
            </div>
            <div class="row">
              <!-- col.// -->
              <?php

              $Ads->showAdsforSeller();

              ?>

            </div> <!-- row end.// -->
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
        <div class="sidebar__link active_menu_link">
          <i class="fa fa-check" aria-hidden="true"></i>

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

<?php if (isset($_GET['verify'])) {
  $id = $_GET['verify'];
  echo "<script>alert(dfef);</script>";
  $users = new user();
  $users->verifyadd($id);
}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $users = new user();
  $users->deleteadd($id);
}
?>