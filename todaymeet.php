<?php
// include "header.php";
include "connection.php";

// Connect to your database (replace with your database credentials)


// Check for a database connection error

// SQL query to fetch multiple records
$sql = "SELECT * FROM meeting WHERE DATE(time) = CURDATE();";
$result = $con->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    $records = array();

    // Fetch each row and add it to the $records array
    while ($row = $result->fetch_assoc()) {
        $records[] = $row;
    }

    // Store the records in the session variable
    $_SESSION['records'] = $records;

    // Close the database connection
    $con->close();
} 
// Display the stored records

?>
