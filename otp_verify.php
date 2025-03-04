<?php  
include "./header.php";
// include('./otp.php');
$entered=$_POST['result'];
$entered1=(int)$entered;

//echo $entered;
include "./connection.php";
   include('smtp/PHPMailerAutoload.php');
   $email=$_SESSION['email'];
  
   // Check connection

   $sql = "SELECT otp_num FROM user WHERE gmail='$email' ";
   $result = mysqli_query($con, $sql);
   
   if (mysqli_num_rows($result) > 0) {
     // output data of each row
     $row = mysqli_fetch_assoc($result);
     $value = $row['otp_num'];
   } else {
     
   }
   
    
if($entered1==$value)
{
    header("location:./otp_verify_link.html");
}
else
{   
    echo "<script> alert('Invalid OTP'); </script>";
  //   header("location:../login-ui/forgot.html");
  echo '<script type="text/javascript">  window.location.href="./otp_verify.php";  </script>';

}


?>