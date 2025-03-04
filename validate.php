<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connected successfully";
}
$name = $email = $password = $channelid = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["myname"]);
  $gmail = test_input($_POST["myemail"]);
  $password = test_input($_POST["mypass"]);
  $channelid = test_input($_POST["mychannel"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$password=$password;
$title=$gmail;
$url="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80";
$sql = "INSERT INTO user (name, gmail, password,channelid) VALUES ('$name','$gmail','$password','$channelid')";
$sql2 = "INSERT INTO profile (name, url) VALUES ('$title', '$url')";
$res=$conn->query($sql);
$res2=$conn->query($sql2);
echo $res;
if ($res) {
  echo "new record created successfully";
  header("Location: index.html");
}
else{
  echo "not created the record";
  header("Location: wrong.php");
}



$conn->close();

?>