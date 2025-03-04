<?php
// Start session and include necessary files
// include "header.php";
include "connection.php"; // Connect to your database

// Check if the user is logged in
// if (!isset($_SESSION['u_data'])) {
//     // Redirect user to login page or handle the situation when the user is not logged in
//     header("Location: index.html");
//     exit();
// }

// Get the user ID from the session data
// $userID = $_SESSION['u_data']['0'];

// Fetch meetings data posted by the current user from the database
$sql = "SELECT  * FROM userposted";
$result = $con->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    $tmrwrecords = array();

    // Fetch each row and add it to the $records array
    while ($row = $result->fetch_assoc()) {
        $reporter_meet[] = $row;
    }

    // Store the records in the session variable
    $_SESSION['reporter_meet'] = $reporter_meet;

    // Close the database connection
    $con->close();
} 

// Display the stored records

?>
