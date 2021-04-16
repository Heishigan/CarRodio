<!DOCTYPE html>
<html>
<head>
  <div>
<table>
  <tr>
    <th>email</th>
    <th>password</th>
    <th>user-type</th>
    <th>name</th>
    <th>select</th>
    <th>btn</th>
  </tr>

  <?php
  $conn=mysqli_connect("localhost","root","","cc");
  $sql="SELECT * FROM users";
  $result=$conn->query($sql);
  ?>
  <?php while ($row=mysqli_fetch_assoc($result)) { ?>
    <tr>
      <form action="" method="post" role="form">
      <td><?php echo $row['email'] ?> </td>
      <td><?php echo $row['password']?> </td>
      <td><?php echo $row['user-type'] ?> </td>
      <td><?php echo $row['name'] ?> </td>
      <!-- <td><input type="checkbox" name="key" value="<?php echo $row['email'];?>" required</td> -->
      <td><input type="submit" name="reject" value="<?php echo $row['email'];?> " required </td>
    </tr>
    </form>


<?php }  ?>
</table>
</div>
</head>
</html>

<?php if (isset ($_POST['reject'])) {
     echo "string";
     $un=$_POST['reject'];
     $conn=mysqli_connect("localhost","root","","cc");
     $sql="DELETE FROM users where email='$un' ";
     $result=$conn->query($sql);

}
 ?>
