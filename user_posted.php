<?php
// Start session and include necessary files
session_start();
include "connection.php"; // Connect to your database
if (!isset($_SESSION['u_data'])) {
    // Redirect user to login page or handle the situation when the user is not logged in
    header("Location: index.html");
    exit();
}

// Get the user ID from the session data
$userID = $_SESSION['u_data']['0'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['place_name'],$_POST['purpose'], $_POST['address'], $_POST['time'])) {
        $mail=$userID;
        // Sanitize and retrieve user input
        $meetingName = $_POST['place_name'];
        $purpose = $_POST['purpose'];
        $address = $_POST['address'];
        $time = $_POST['time'];

        // Insert user data into the table
        $insertQuery = "INSERT INTO userposted (gmail,placename, purpose, address, time) VALUES ('$mail','$meetingName', '$purpose', '$address', '$time')";
        
        // Execute the query
        if ($con->query($insertQuery) === TRUE) {
            // Redirect back to the profile page after successful submission
            header("Location: aviprofile.php");
            exit();
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}
?>
