<?php
include "header.php";
// include "login.php";
if(!isset($_SESSION['u_data'])){
    header("Location:index.html");
}
// include "login.php";
// include "todaymeet.php";
// include "tomorrowmeet.php";
include "reportersposted.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: black;
            color: aqua;
            padding: 28px 10px 10px; /* Decreased padding to decrease the height */
            text-align: center;
            font-size: 20px; /* Decreased font size */
            border-bottom: 1px solid aqua;
        }

        .navbar {
            overflow: hidden;
            background-color: black;
            color: aqua;
            position: fixed; /* Fixed position to stick it on top */
            width: 100%; /* Occupy full width */
            top: 0; /* Align it to the top */
            z-index: 1000; /* Ensure it's above other elements */
            border-bottom: 2px solid aqua; /* Add a 2px solid border under the navbar */
        }
        .tod{
            
            color: green;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        
        }

        .navbar a {
            float: right;
            display: block;
            color: aqua;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar img{
            
            text-align: center;
            padding: 5px 0px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #555;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .record {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s;
            display: inline-block;
            width: 45%; /* Two records in a row */
            margin-right: 5%; /* Spacing between records */
            vertical-align: top;
            box-sizing: border-box;
        }

        .record:hover {
            transform: scale(1.02);
        }

        .record p {
            font-size: 18px;
            margin: 5px 0;
            color: #333;
        }

        .record strong {
            color: #ff9900;
        }

        /* Sidebar styles */
        .menu-bar {
            background-color: white;
            color: black;
            
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: black;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            color: aqua;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #555;
        }
        /* Contact Form Styles */

footer {
    background-color: black;
    color: #fff;
    padding: 8px 0;
}

.container form {
    max-width: 600px;
    margin: 0 auto;
}

form label {
    display: block;
    margin-bottom: 8px;
    color: #ff9900;
}

form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

form button {
    background-color: #ff9900;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer
}
.developer-info {
    margin-top: 30px;
}

.developer-info p {
    color: #888; /* Color for general text in developer section */
    font-size: 16px;
}

.developer-info .developer-text {
    color: #ff9900; /* Color for the 'Developed by' text */
    font-weight: bold;
    font-size: 18px;
    margin-top: 5px;
}
.about {
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the container */
            padding: 30px; /* Add padding inside the container */
            background-color: gray; /* Background color */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
            display:flex;
        }
        #head{
            color:aqua;
        
        }

    </style>
</head>
<body>
    <header>
       
    </header>

    <div class="navbar">
    <img src="logo.webp" alt="OpenAI Logo" style="height: 30px; margin-left: 10px;">
    
       <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="displaytodaymeet.php">Home</a>
    </div>
    
    <div class="menu-bar" onclick="openSidebar()">☰ Menu</div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
        <a href="aviprofile.php">PROFILE</a>
        <a href="pavanilocation.php">LOCATION</a>
        <a href="yagnareporters.php">MEETINGS</a>
        <a href="logout.php">LOGOUT</a>
    </div>
    


    
    <center>
        <div id="head">
    <h2 style="color:aqua;background-color:gray;display:inline-block;padding:6px;border-radius:5px;">&nbsp; &nbsp; PRESS MEET SHEDULING&nbsp; &nbsp;</h2></div>
    </center>
    
    <div class="tod">POSTED MEETINGS BY REPORTERS</div>

<div class="container">
    <?php
    

    // Check if the session variable 'records' exists
    if (isset($_SESSION['reporter_meet'])) {
        $records = $_SESSION['reporter_meet'];

        // Loop through the records and display them in two columns
        for ($i = 0; $i < count($reporter_meet); $i++) {
            echo '<div class="record">';
            echo "<p><strong>placename:</strong> <span style='color: #007f3f;'>" . $reporter_meet[$i]['placename'] . "</span></p>";
            echo "<p><strong>meetingname:</strong> <span style='color: #0099cc;'>" . $reporter_meet[$i]['purpose'] . "</span></p>";
            echo "<p><strong>address:</strong> <span style='color: #007f3f;'>" . $reporter_meet[$i]['address'] . "</span></p>";
            echo "<p><strong>data and time:</strong> <span style='color: #0099cc;'>" . $reporter_meet[$i]['time'] . "</span></p>";
            echo "<p><strong>POSTED BY THE PERSON:</strong> <span style='color: #0099cc;'>" . $reporter_meet[$i]['gmail'] . "</span></p>";
            
            echo "</div>";

            // Start a new row for the next two records
            if (($i + 1) % 2 === 0) {
                echo '<div style="clear: both;"></div>'; // Clear the float to start a new row
            }
        }
    } else {
        echo "<p>No records found in the session variable.</p>";
    }
    ?>
</div>
<br id="about"><br><br>
<div class="about">
        <p><b><strong>"Media Briefing Schedule: Save the Dates!"</strong></b></br>
        Effective scheduling of meetings per day involves balancing the need for discussions, respecting participants' time, and optimizing productivity. Prioritization, clear communication, and thoughtful planning play crucial roles in managing a day filled with meetings efficiently.
</p>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD-_EAUaustnCUpNR8LS_yUFcqwP459NVrnR35OnE7Lg&s">
    </div>
    <br><br><br>

    <footer>
    <div class="container">
        <h2 id="contact">Contact Us</h2>
        <form action="test.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <div class="developer-info">
            <p>Contact us for any queries.</p>
            <p class="developer-text">Developed by <strong>SE TEAM 14 FROM CSE-1</strong></p>
        </div>
    </div>
</footer>


    <script>
        function openSidebar() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeSidebar() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
</body>
</html>
