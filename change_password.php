<?php
// include ('./otp.php');
include "./header.php";
include "./connection.php";

$pass=$_POST['pass'];
$email=$_SESSION['email'];


$sql = "UPDATE user SET password='$pass' WHERE gmail='$email' ";

if (mysqli_query($con, $sql)) {
 //  echo "Record updated successfully";
 echo "Password Updated Successfully! Re-Login'); </script>";
 //header("location:../../OES");
 echo '<script type="text/javascript">  window.location.href="./index.html";  </script>';

  
} else {
  echo "<script> alert('Error Occured Try Again'); </script>";
  //header("location:../login-ui/forgot.html");
  echo '<script type="text/javascript">  window.location.href="./forgot.html";  </script>';

 // echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
