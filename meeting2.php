<?php
include "./connection.php";
if(isset($_POST['submit'])){
    $selected_val = $_POST['place']; 
    // echo "You have selected :" .$selected_val; 
    }
$sql="SELECT * FROM meeting where placename='$selected_val'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch)


?>