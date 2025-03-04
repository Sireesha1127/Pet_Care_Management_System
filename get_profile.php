<?php
include "header.php";
if(!isset($_SESSION['u_data'])){
    header("Location:index.html");
}
if(isset($_SESSION['u_data'])){
    $user=$_SESSION['u_data'];
}
?>
<?php
$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$photo=$user['0'];

$sql = "SELECT url FROM profile where name='$photo' limit 1";
$result = $conn->query($sql);
$images = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = $row;
    }
}

$conn->close();
echo json_encode($images);
?>