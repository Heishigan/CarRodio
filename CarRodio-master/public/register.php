<?php
include '../src/backend/classes/database.php';
include 'users.php';
include("../src/backend/includes/autoloader.inc.php");

$test = new CarDetailsView();
$carsView = new CarView();
$carinsert = new CarContr();
$adInsert = new AdsContr();
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
            <p>Welcome to your Seller Dashboard</p>
          </div>
        </div>

        <div class="charts">
          <div class="charts__left">
            <div class="charts__left__title">
              <h1> Post a new Advertisement</h1>
            </div>
            <div class="charts__left__cards">
              <br>
              <form method="post" action="register.php" enctype="multipart/form-data">

                <div class="field">
                  <label>brand-name:</label>
                  <input type="text" name="brand" required>
                </div><br><br>
                <div class="field">
                  <label>car-name:</label>
                  <input type="text" name="name" required>
                </div><br><br>
                <div class="field">
                  <label>model:</label>
                  <input type="text" name="model" required>
                </div><br><br>
                <div class="field">
                  <label>price:</label>
                  <input type="number" name="price" required>
                </div><br><br>
                <div class="field">
                  <label>engine-name:</label>
                  <input type="text" name="engine-name" required>
                </div><br><br>
                <div class="field">
                  <label>engine-capacity:</label>
                  <input type="text" name="engine-capacity" required>
                </div><br><br>
                <div class="">
                  <label>condition:</label><br><br>
                  <input type="radio" name="condition" value="brandnew" required>
                  <label for="brandnew">brand-new</label><br>
                  <input type="radio" name="condition" value="used" required>
                  <label for="used">used</label><br><br>

                </div><br><br>
                <div class="">
                  <label for="body-type">bodytype:</label><br><br>
                  <select name="body-type" required>
                    <option value="hatchback">hatchback</option>
                    <option value="sedan">sedan</option>
                    <option value="muv/suv">muv/suv</option>
                    <option value="coupe">coupe</option>
                    <option value="convertible">wagon</option>
                    <option value="van">van</option>
                    <option value="jeep">jeep</option>
                  </select>
                  <br>
                  <br>
                </div>
                <div class="">
                  <label>transmission:</label><br><br>
                  <input type="radio" name="transmission" value="auto" required>
                  <label for="auto">auto</label><br>
                  <input type="radio" name="transmission" value="manual" required>
                  <label for="manual">manual</label><br><br>

                </div>
                <div class="">
                  <label>fuel-type:</label><br><br>
                  <input type="radio" name="fuel-type" value="pertrol" required>
                  <label for="petrol">petrol</label><br>
                  <input type="radio" name="fuel-type" value="diesel">
                  <label for="diesel">diesel</label><br>
                  <input type="radio" name="fuel-type" value="electric" required>
                  <label for="electric">electric</label><br><br>

                </div>
                <div class="field">
                  <label>mileage:</label>
                  <input type="text" name="mileage">
                </div><br><br>
                <div class="">
                  <label>image-1:</label>
                  <input type="file" name="image">
                </div>
                <div class="">
                  <label>image-2:</label>
                  <input type="file" name="image2">
                </div>
                <div class="">
                  <label>image-3:</label>
                  <input type="file" name="image3">
                </div>
                <div class="">
                  <label>image-4:</label>
                  <input type="file" name="image4">
                </div>
                <div class="">
                  <label>image-5:</label>
                  <input type="file" name="image5">
                </div><br><br>
                <div class="field btn">
                  <button type="submit" name="addpost" class="btn">Post Car</button>
                  <button type="submit" name="fullpost" class="btn">Post Full</button>
                </div>
            </div>
            </form>

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
        <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
      </div>
      <div class="sidebar__menu">
        <div class="sidebar__link active_menu_link">
          <i class="fa fa-car"></i>
          <a href="register.php">Add Vehicle</a>
        </div>
        <div class="sidebar__menu">
          <div class="sidebar__link ">
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
<?php
if (isset($_POST['addpost'])) {
  $carid = $_POST['car-id'];
  $brandname = $_POST['brand'];
  $carname = $_POST['name'];
  $model = $_POST['model'];
  $price = $_POST['price'];
  $enginename = $_POST['engine-name'];
  $enginecap = $_POST['engine-capacity'];
  $condition = $_POST['condition'];
  $bodytype = $_POST['body-type'];
  $transmission = $_POST['transmission'];
  $fueltype = $_POST['fuel-type'];
  $mileage = $_POST['mileage'];

  $target = "../src/frontend/assets/imgs/uploads/" . basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], $target);
  $target2 = "../src/frontend/assets/imgs/uploads/" . basename($_FILES['image2']['name']);
  $image2 = $_FILES['image2']['name'];
  move_uploaded_file($_FILES['image2']['tmp_name'], $target2);
  // $target3 = "image/" . basename($_FILES['image3']['name']);
  // $image3 = $_FILES['image3']['name'];

  // $target4 = "image/" . basename($_FILES['image4']['name']);
  // $image4 = $_FILES['image4']['name'];

  // $target5 = "image/" . basename($_FILES['image5']['name']);
  // $image5 = $_FILES['image5']['name'];


  $cardetailsinsert = new CarDetailsContr();
  //inserts the car details
  $cardetailsinsert->createCarDetails(
    $enginename,
    $enginecap,
    $bodytype,
    $transmission,
    $fueltype,
    $mileage,
    $image,
    $image2
  );

  //Gets the ID for the last details
  $cardetailsID = $test->getCarDetailLastID();

  //Inserts the car
  $carinsert->createCar($carname, $brandname, $cardetailsID, $model, $price,  $condition);

  //Gets the Id of the last car
  $carID = $carsView->getCarsLastID();

  //Insert add
  $adInsert->createAd('2021-05-12', $carID, $brandname, $cardetailsID, 1, false);
}





?>