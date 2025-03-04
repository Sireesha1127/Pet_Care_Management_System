<!DOCTYPE html>
<html>
    <head>

    </head>
<body>
<?php
include "./header.php";
include "./connection.php";
   
   include('smtp/PHPMailerAutoload.php');
   
   

    
//    print_r($_POST);
    //$email= $_POST['mail'];
    //$email="shabberalisk6@gmail.com";
    
    $email=$_POST['mail'];
    $sql="SELECT gmail FROM user WHERE gmail='$email' ";

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        $n = 6; 
    
    $otp=generateNumericOTP($n);
    $sql1="UPDATE user SET otp_num='$otp' WHERE gmail='$email' ";
    if (mysqli_query($con, $sql1)) {
       //  echo "Record updated successfully";
      }
   
     
    echo smtp_mailer($email,'Verification',$otp);
    $_SESSION['email']=$email;
    header("location:./otp_cal.html");
    ?>

<?php
    } 
    else{
        
        
        echo '<script type="text/javascript">  alert("Invalid Student Email");  </script>';
       // header("location:../login-ui/forgot.html");
       echo '<script type="text/javascript">  window.location.href="./forgot.html";  </script>';

       
    }

    

    function smtp_mailer($to,$subject, $msg){
        $mail = new PHPMailer(); 
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        //$mail->SMTPDebug = 2; 
        $mail->Username = "demirakrishna143@gmail.com";
        $mail->Password ="tvye mqab zgdh apio";
        $mail->SetFrom("demirakrishna143@gmail.com");
        $mail->Subject = $subject;
        $mail->Body =$msg;
        $mail->AddAddress($to);
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        if(!$mail->Send()){
            echo $mail->ErrorInfo;
        }
    }
    
    //otp function


// Function to generate OTP 
function generateNumericOTP($n) { 
	
	
	$generator = "1357902468"; 

	$result = ""; 

	for ($i = 1; $i <= $n; $i++) { 
		$result .= substr($generator, (rand()%(strlen($generator))), 1); 
	} 

	// Return result 
	return $result; 
} 

// Main program 

mysqli_close($con);
?> 

    
</body>
</html>