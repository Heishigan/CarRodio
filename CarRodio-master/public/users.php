<?php
/**
 *
 */
class user extends database
{
  public $msg;
  public $uncheck;
  public $logincheck;


  // public function getallusers()
  // {
  //
  //   $sql="SELECT * FROM users";
  //   $result = $this->connect()->query($sql);
  //   // $numRows = $result->num_rows;
  //   //    if($numRows>0){
  //   //   while($row = $result -> fetch_assoc()){
  //   //      $data[]=$row;
  //   //      }
  //   //  return $data;
  //   //   }
  //   while ($row = $result ->fetch()) {
  //     echo $row['email'];
  //   }
  // }
  public function deleteadd($id) {
      $conn=mysqli_connect('localhost','root','', 'carrodio');
      $query="DELETE FROM cars where carid='$id'";
      $result=$conn->query($query);
        echo '<script>alert("add deleted")</script>';
  }
  public function verifyadd($id) {
    $db=mysqli_connect('localhost','root','', 'carrodio');
    $query="UPDATE cars SET verify='1' WHERE carid='$id'";
    mysqli_query($db,$query);
    echo '<script>alert("add verified")</script>';
  }
  public function getusers($email,$password) {

    $db=mysqli_connect('localhost','root','', 'carrodio');
    $query="SELECT * FROM users where email='$email' AND Password='$password'";
    $result= mysqli_query($db,$query);
    if (mysqli_num_rows($result)<>1) {


      echo '<script>alert("Username or Password Incorrect")</script>';


    }
    else {
    $sql= "SELECT * FROM users where email=? AND Password=?";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$email,$password]);
    $names = $stmt->fetchAll();

    foreach ($names as $name) {
      echo $email;
      echo "<br>";
      if ($name['Password']==$password) {
        $this->logincheck="login succesfull";
      }

    }

  }
}
  public function recordusers($email,$password,$usertype,$name) {
    // echo $email;
    // echo $password;
    // echo $usertype;
    // $db=mysqli_connect('localhost','root','','cc');
    // $q="SELECT * FROM users where email='$email'";
    // $r=mysqli_query($db,$q);
    // if (mysqli_num_rows($r)>0) {
    //   echo "username already exists";
    // }

      $sql="INSERT INTO users VALUES (?,?,?,?)";
      $stmt=$this->connect()->prepare($sql);
      $stmt->execute([$email, $name, $password, $usertype]);
      $query= "INSERT INTO users(email,username,Password,usertype) VALUES (?,?,?,?)";
      $db=$this->connect()->prepare($query);
      $db->execute([$email, $name, $password, $usertype]);
      // $res="succesfully inserted";
      $this->msg="sucessfully inserted";
}

public function usercheck($email) {

  // $db=mysqli_connect('localhost','root','','cc');
  // $q="SELECT * FROM users where email='$email' and user-type='$usertype'";
  // $r=mysqli_query($db,$q);
  // if (mysqli_num_rows($r)==1) {
    // if ($usertype=="admin") {
    //   header("location:admin.php");
    // }
    // if ($usertype=="seller") {
    //     header("location:seller.php");
    // }
    // if ($usertype=="buyer") {
    //     header("location:buyer.php");
    // }
  //   else {
      // echo "this user is not a " . $usertype;
  //   }
  // }
  //
  $sql="SELECT * FROM users where email=?";
  $stmt=$this->connect()->prepare($sql);
  $stmt->execute([$email]);

  $names = $stmt->fetchAll();
  echo "string";
  $email2='';

  foreach ($names as $name) {
    if ($name['usertype']==="admin") {
        header("location:admin.php");
      }
      if ($name['usertype']=="seller") {
          header("location:register.php");
          $_SESSION["sellerID"] = $name['ID'];
      }
      if ($name['usertype']=="buyer") {
          header("location:test.php");
          $_SESSION["buyerID"] = $name['ID'];
      }
  }

  }




    public function userexists($email) {
      $db=mysqli_connect('localhost','root','', 'carrodio');
      $q="SELECT * FROM users where email='$email'";
      $r=mysqli_query($db,$q);
      if (mysqli_num_rows($r)>0) {

        $this->uncheck="username already exists";

      }
    }


    // else {
    //   $sql="INSERT INTO users VALUES ('$email','$password','$usertype')";
    //   mysqli_query($db,$sql);
    //   echo "recorded";
    //   echo $sql;
    // }
   public function recordadd($carid,$brandname,$carname,$model,$price,$enginename,$enginecap,$condition,$bodytype,$transmission,$fueltype,$mileage,$target,$image,$target2,$image2,$target3,$image3,$target4,$image4,$target5,$image5) {
     $sql="INSERT INTO cars VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
     $stmt=$this->connect()->prepare($sql);
     $stmt->execute([$carid,$brandname,$carname,$model,$price,$enginename,$enginecap,$condition,$bodytype,$transmission,$fueltype,$mileage,$image,$image2,$image3,$image4,$image5,'0']);
     $query="INSERT INTO cars(carid,brandname,carname,model,price,enginename,enginecap,condition,bodytype,transmission,fueltype,mileage,image,image2,image3,image4,image5,verify) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
     $db=$this->connect()->prepare($query);
     $db->execute([$carid,$brandname,$carname,$model,$price,$enginename,$enginecap,$condition,$bodytype,$transmission,$fueltype,$mileage,$image,$image2,$image3,$image4,$image5,'0']);
     echo "recorded detials";
     if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
      if (move_uploaded_file($_FILES['image2']['tmp_name'],$target2)) {
        if (move_uploaded_file($_FILES['image3']['tmp_name'],$target3)) {
          if (move_uploaded_file($_FILES['image4']['tmp_name'],$target4)) {
            if (move_uploaded_file($_FILES['image5']['tmp_name'],$target5)) {
              echo '<script>alert("Succesfully Posted")</script>';
     }
   }
 }
}
}
     else {
      echo '<script>alert("Upload Failed")</script>';
     }

   }



}






























 ?>
