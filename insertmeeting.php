<?php
include "connection.php";
$place=$purpose=$venue=$time="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place = test_input($_POST["placename"]);
    $venue = test_input($_POST["venue"]);
    $time = test_input($_POST["time"]);
    $purpose = test_input($_POST["purpose"]);
    
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $sql = "INSERT INTO meeting (placename, purpose, address,time) VALUES ('$place','$purpose','$venue','$time')";
$res=$con->query($sql);
echo $res;
if ($res) {
  echo "new record created successfully";
  header("Location: adminpage.php");
}
else{
  echo "not created the record";
  header("Location: wrong.php");
}



$con->close();

?>