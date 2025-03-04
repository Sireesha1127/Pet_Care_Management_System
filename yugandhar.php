<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// Database connection details
$servername="localhost";
$username="root";
$password="";
$database="project";

// Initialize variables for user input and result message
$userInput = "";
$resultMessage = "";

// Create a database connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['symptoms'])) {
    // Get user input
    $userInput = $_POST['symptoms'];

    // Sanitize and preprocess the input (to prevent SQL injection, make it case-insensitive, and remove white spaces)
    $userInput = $mysqli->real_escape_string($userInput);
    $userInput = trim($userInput); // Remove leading and trailing white spaces
    $userInput = str_replace(' ', '', $userInput); // Remove white spaces within the text
    $userInputLower = strtolower($userInput); // Convert to lowercase for case-insensitive search

    // Query the database with case-insensitive and space-removed comparison
   $query = "SELECT * FROM Med WHERE LOWER(REPLACE(Symptom, ' ', '')) = '$userInputLower'";
      $query = "SELECT * FROM Med WHERE LOWER(REPLACE(Symptom, ' ', '')) like '%$userInputLower%'";
//$query = "SELECT * FROM Med WHERE FIND_IN_SET('$userInputLower', REPLACE(Symptom, ' ', '')) > 0";

    $result = $mysqli->query($query);

    // Check if there are matching results
    if ($result->num_rows > 0) {
        $resultMessage = "<h2> Results:</h2>";
        $result1="<i> This is just assumption not accurate 
        <br>,you are requested to consult the professional Doctors </i>";
        while ($row = $result->fetch_assoc()) {
            $resultMessage .= "<b>Disease:</b> " . $row['Disease'] . "<br>";
               $resultMessage .= "<b>Symtomps: </b>" . $row['Symptom'] . "<br>";
            $resultMessage .= "<b>Medications: </b>" . $row['Medications'] . "<br>";
            $resultMessage .= "<b>MedicationInstructions: </b>" . $row['MedicationInstructions'] . "<br><br><br>";
        }
    } else {
        $resultMessage = "No matching results found.";
    }
}

// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Symptom Checker</title>

    <!-- Include Bootstrap CSS and JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 600px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        /* Adjust styles for the suggestions dropdown */
        input[list="symptomSuggestions"] {
            width: 100%;
        }

        /* Style the suggestion dropdown */
        datalist#symptomSuggestions {
            position: absolute;
            border: 1px solid #ccc;
            max-height: 150px;
          
            display: none;
        }

        /* Style individual suggestions */
        datalist#symptomSuggestions option {
            padding: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007BFF;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        h2 {
            margin-top: 20px;
            color: #333;
        }
        body{
        background-image:radial-gradient(lightgreen,skyblue);
        }
  .my-button{
        background-color: #4CAF50; /* Green background */
        border: none; /* Remove border */
        color: white; /* White text */
        padding: 12px 24px; /* Some padding */
        text-align: center; /* Center text */
        text-decoration: none; /* Remove underline */
        display: inline-block; /* Make it inline */
        font-size: 10px; /* Font size */
        margin: 4px 2px; /* Add some margin */
        cursor: pointer; /* Add cursor on hover */
        border-radius: 4px; /* Add rounded corners */
    }

    /* Hover effect */
    .my-button:hover {
        background-color: #3e8e41;
    }
    </style>
     <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Medicio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
 <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="fa-solid fa-user-doctor"></i>WELCOME 
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 7075425399
      </div>
    </div>
  </div>
<div id="sec">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Health companion</a></h1> -->
 <h1 class="logo me-auto"><a href="index.html">HEALTH COMPANION</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#a">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#s">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#d">Doctors</a></li>
             <li><a class="nav-link scrollto" href="index.html#c">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</a>

    </div>
  </header><!-- End Header -->
  
</br></br>
</br></br>
</br></br>

<center>
    <h1>Symptom Checker</h1>
    <p>Enter your symptoms (comma-separated and alphabetical wise):</p>
    
    <form method="post">
    <div class="form-group">
        <input type="text" name="symptoms" placeholder="e.g., fever, cough, headache"style="width:300px;" class="form-control" required value="<?= $userInput ?>">
        <br><br>
        <input type="submit" value="Submit" class="my-button">
           
           </div>
    </form>
 <?=$result1?>
    <?= $resultMessage ?>
   
    </center>
</body>
</html>