<?php
include '../src/backend/classes/database.php';
include 'users.php';
session_start();
$un = "";
$pw = "";
$usertype = "";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login and Registration</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <link rel="stylesheet" href="../src/frontend/assets/css/index.css" />
  <link rel="stylesheet" href="../src/frontend/assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>
  <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="home.php"><i class="ion-android-car"></i> Car Rodio</a>
      </div>
      <div class="navbar-collapse collapse" id="bs-navbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="#">Browse Cars</a>
          </li>
          <li>
            <a href="#">Contact Us</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="index.php">Login/SignUp</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="cont">
    <form method="post" action="index.php">
      <div class="form sign-in">
        <h2>Sign In</h2>
        <label>
          <span>Email Address</span>
          <input type="email" name="username" required>
        </label><br>
        <label>
          <span>Password</span>
          <input type="password" name="password" required>
        </label>
        <button class="submit" name="login" type="submit">Sign In</button>
        <p class="forgot-pass">Forgot Password ?</p>

      </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New to this site?</h2>
          <p>Sign up to post an advertisement of your vehicle</p>
        </div>
        <div class="img-text m-in">
          <h2>Existing user?</h2>
          <p>If you already have an account, please sign in</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form method="post" action="index.php">
        <div class="form sign-up">
          <h2>Sign Up</h2>
          <label>
            <span>Username</span>
            <input type="email" name="username" required>
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password" required>
          </label>
          <label>
            <span>Confirm Password</span>
            <input type="password" name="re-enterpassword" required>
          </label>
          <label>
            <span>User Type</span>
            <select name="usertype" required>
              <option value="admin">Admin</option>
              <option value="buyer">Buyer</option>
              <option value="seller">Seller</option>
            </select></label>

          <button type="submit" name="register" class="submit">Sign Up Now</button>
        </div>
      </form>
    </div>
  </div>

  <?php

  if (isset($_POST['register'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $usertype = $_POST['usertype'];
    $repass = $_POST['re-enterpassword'];

    if (empty($un)) {
      echo "pls enter username";
      echo "<br>";
    }
    if (empty($pw)) {
      echo "pls enter pwd";
      echo "<br>";
    }
    if (empty($usertype)) {
      echo "pls enter usertype ";
      echo "<br>";
    }
    if (empty($repass)) {
      echo "pls re - enter password";
      echo "<br>";
    }
    if ($usertype == "admin" || $usertype == "buyer" || $usertype == "seller") {
      if (empty($un) == false) {
        if (empty($pw) == false) {
          if (empty($repass == false)) {
            if (empty($usertype) == false) {
              if ($repass == $pw) {
                $pw = md5($pw);
                $users = new user();
                $users->userexists($un);
                if ($users->uncheck == "username already exists") {
                  echo '<script>alert("Username already exists")</script>';
                } else {
                  $users->recordusers($un, $pw, $usertype);
                  echo '<script>alert("Succesfully created an account")</script>';
                }
              } else {
                echo '<script>alert("Both passwords doesn\'t match")</script>';
              }
            }
          }
        }
      }
    } else {
      echo "not a valid usertype";
    }
  }
  if (isset($_POST['login'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];

    if (empty($un)) {
      echo "pls enter username";
    }
    if (empty($pw)) {
      echo "pls enter pwd";
    }

    if (empty($un) == false) {
      if (empty($pw) == false) {
        $pw = md5($pw);
        $users = new user();
        $users->getusers($un, $pw);
        if ($users->logincheck == "login succesfull") {
          echo '<script>alert("Login Succesfull")</script>';
          $users->usercheck($un);
        }
      }
    }
  }

  ?>

  <script type="text/javascript" src="../src/frontend/assets/js/index.js"></script>
</body>

</html>