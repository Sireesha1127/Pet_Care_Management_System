<?php
include('smtp/PHPMailerAutoload.php');

$email=$_POST['email'];
$message=$_POST['message'];
$name=$_POST['name'];


//to_mail your mail
$mess="email"."$email"."\n"."message\n". "$message"."name". "$name";
echo smtp_mailer('abhivenkat6969@gmail.com','Verification',$mess);
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
	$mail->Password = "tvye mqab zgdh apio";
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
	}else{
		header("Location:displaytodaymeet.php");
	}
}
?>