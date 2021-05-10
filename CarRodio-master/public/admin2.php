<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php

include("../src/backend/includes/autoloader.inc.php");

include('../src/backend/classes/cars.class.php');







$cats = new car();
$Ads = new Ads();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>carrodio</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../src/frontend/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../src/frontend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../src/frontend/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Manage Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="verifyads.php">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Verify Advertisements</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->


          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
              <!-- Dropdown header -->
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
              </div>
              <!-- List group -->




              <a href="#!" class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                  <div class="col-auto">


                  </div>
              </a>
            </div>


        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">current users</h5>


                      <span class="h2 font-weight-bold mb-0">

                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "carrodio");
                        $query = "SELECT count(email) AS total FROM users";
                        $query_result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($query_result);
                        $num_rows = $row['total'];
                        echo $num_rows;

                        ?>


                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">rejected users</h5>
                      <span class="h2 font-weight-bold mb-0"><?php
                                                              $conn = mysqli_connect("localhost", "root", "", "carrodio");
                                                              $query = "SELECT count(email) AS total FROM rejected";
                                                              $query_result = mysqli_query($conn, $query);
                                                              $row = mysqli_fetch_assoc($query_result);
                                                              $num_rows = $row['total'];
                                                              echo $num_rows;
                                                              ?>

                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">number of verified adds</h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php
                        $Ads->showVerifiedAds();
                        ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">most engaged buyer</h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "carrodio");
                        $query = "SELECT UserID, COUNT(*) AS HIGH FROM commentsrating GROUP BY UserID ORDER BY HIGH DESC LIMIT 1";
                        $query_result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($query_result);
                        $num_rows = $row['UserID'];

                        $query2 = "SELECT username FROM users WHERE ID='$num_rows'";
                        $query_result2 = mysqli_query($conn, $query2);
                        $row2 = mysqli_fetch_assoc($query_result2);
                        $val = $row2['username'];

                        echo $val;


                        ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">number of adds posted</h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "carrodio");
                        $query = "SELECT count(ID) AS total FROM ad";
                        $query_result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($query_result);
                        $num_rows = $row['total'];
                        echo $num_rows;






                        ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>




            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->

                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">highest reached ad(car name)</h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "carrodio");
                        $query = "SELECT AdID, COUNT(*) AS HIGH FROM commentsrating GROUP BY AdID ORDER BY HIGH DESC LIMIT 1";
                        $query_result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($query_result);
                        $num_rows = $row['AdID'];

                        $query2 = "SELECT CarID FROM ad WHERE ID='$num_rows'";
                        $query_result2 = mysqli_query($conn, $query2);
                        $row2 = mysqli_fetch_assoc($query_result2);
                        $val = $row2['CarID'];

                        $query3 = "SELECT Name FROM Car WHERE ID='$val'";
                        $query_result3 = mysqli_query($conn, $query3);
                        $row3 = mysqli_fetch_assoc($query_result3);
                        $val2 = $row3['Name'];

                        echo $val2;

                        ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">adds to be verified</h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php

                        $Ads->showUnVerifiedAds();
                        ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->


    <div class="row">
      <div class="col-xl-8">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">users</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">email</th>
                  <th scope="col">password</th>
                  <th scope="col">Usertype</th>
                  <th scope="col">name</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <?php
              $conn = mysqli_connect("localhost", "root", "", "carrodio");
              $sql = "SELECT * FROM users";
              $result = $conn->query($sql);
              ?>
              <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <form action="" method="post" role="form">
                      <th scope="row">
                        <?php echo $row['email'] ?>
                      </th>

                      <td>
                        <?php echo $row['Password'] ?>
                      </td>
                      <td>
                        <?php echo $row['usertype'] ?>
                      </td>
                      <td>
                        <?php echo $row['username'] ?>
                      </td>
                      <!-- <td>
                      <input type="checkbox" name="key" value="<?php echo $row['email']; ?>" required
                    </td> -->
                      <td>
                        <a href="admin2.php?reject=<?php echo $row['email']; ?>">delete
                      </td>
                  </tr>
                  </form>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="footer pt-0">

      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>

</body>

</html>

<?php if (isset($_GET['reject'])) {

  $un = $_GET['reject'];

  $conn = mysqli_connect("localhost", "root", "", "carrodio");
  $sql = "DELETE FROM users where email='$un' ";
  $result = $conn->query($sql);
  $sql2 = "INSERT INTO rejected(email) VALUES('$un')";
  mysqli_query($conn, $sql2);
  echo '<script>alert("deleted user")</script>';
}

?>