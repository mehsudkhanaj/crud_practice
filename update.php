<?php 
// include 'connect.php';
// if(isset($_GET['uid'])){
//     $uid=$_GET['uid'];
//     $sql="UPDATE `crud` SET `name`='jimiloveshanza',`email`='jimilove@gmail.com' where id=2";
//     $result=mysqli_query($conn,$sql);
//     if($result){
//         echo "Updated Data Successfully";
//     }else{
//         die(mysqli_error($conn));
//     }
// }

?>
<?php
include('connect.php');


$uid=$_GET['uid'];
$sql="SELECT * FROM crud where id=$uid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "UPDATE crud SET id=$uid, name='$name', email='$email', mobile='$mobile', password='$password' where id=$uid";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header('location:display.php');
    // header('location:display.php');
  } else {
    die(mysqli_error($conn));
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <title>Crud Operation</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Name" name='name' autocomplete='off' value='<?php echo $name ?>'>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Your Email" name='email' autocomplete='off' value='<?php echo $email ?>'>
      </div>
      <div class="form-group">
        <label>Mobile Number</label>
        <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name='mobile' autocomplete='off' value='<?php echo $mobile ?>'>
      </div> 
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter Your Password" name='password' autocomplete='off' value='<?php echo $password ?>'>
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>
</body>

</html>