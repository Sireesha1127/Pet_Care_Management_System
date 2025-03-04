<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST['id'])) {
    $imageId = $_POST['id'];
    $conn = new mysqli("localhost", "root", "", "project");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch the URL of the image to be deleted
    $sql = "SELECT url FROM uploads WHERE id = $imageId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageUrl = $row['url'];

        // Delete the image file from the server
        if (unlink($imageUrl)) {
            // Delete the image from the database
            $sql = "DELETE FROM uploads WHERE id = $imageId";
            if ($conn->query($sql) === true) {
                echo "Image deleted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error deleting the image file.";
        }
    }

    $conn->close();
}
?>