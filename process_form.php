<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "janakiramayya004@gmail.com"; // Replace with the admin's email address
    $subject = "New Contact Form Submission from $name";
    $message = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send the email to the admin
    mail($to, $subject, $message);
    
    // Optionally, you can save the form data to a database or a file for reference.
    
    // Redirect the user to a thank you page
    header("Location: thank_you.html");
} else {
    // Handle the form submission error
    echo "Form submission failed.";
}
?>
