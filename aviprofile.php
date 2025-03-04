<?php
// include "header.php";
include "userpostedmeetings.php";
if(!isset($_SESSION['u_data'])){
    header("Location:index.html");
}
if(isset($_SESSION['u_data'])){
    $user=$_SESSION['u_data'];
}

?>

?>
<!DOCTYPE html>
<html>
<head>
    <title>profile card</title>
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
            padding: 21px 10px 10px; /* Decreased padding to decrease the height */
            text-align: center;
            font-size: 20px; /* Decreased font size */
            border-bottom: 1px solid aqua;
        }

        .navbar {
            overflow: hidden;
            background-color: black;
            color: #fff;
            position: fixed; /* Fixed position to stick it on top */
            width: 100%; /* Occupy full width */
            top: 0; /* Align it to the top */
            z-index: 1000; /* Ensure it's above other elements */
            border-bottom: 2px solid aqua; /* Add a 2px solid border under the navbar */
        }
        .navbar img{
            
            text-align: center;
            padding: 5px 0px;
            text-decoration: none;
        }
        .tod{
            
            color:#110000;
            padding: 20px;
            text-align: center;
            font-size: 40px;
			font-family:serif;
        
        }

        .navbar a {
            float: right;
            display: block;
            color: aqua;
            text-align: center;
            padding: 14px 16px;
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
        button{
             color:aqua;
             background-color:black;
             padding:10px;
             border:2px solid aqua;
             width:100px;
             height:50px;
             border-radius:5px;
        }
        #postmeet{
            color:aqua;
             background-color:black;
             padding:10px;
             border:2px solid aqua;
             width:300px;
             height:50px;
             border-radius:5px;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f8f8f8;
            border-radius: 5px;
        }
        .responsive-img {
            max-width: 100%;
            height: auto;
        }
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
.about {
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the container */
            padding: 20px; /* Add padding inside the container */
            background-color: #f0f0f0; /* Background color */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
            display:flex;
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

    </style>
    <header>
       
    </header>

    <div class="navbar ">
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
            <br>
    <h2 style="color:aqua;background-color:white;display:inline-block;padding:6px;border-radius:5px;">&nbsp; &nbsp; PRESS MEET SHEDULING&nbsp; &nbsp;</h2></div>
    </center>
    <div class="tod">User Profile Card</div>
<div class="container">
     <link rel="stylesheet" href="profilecss.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   



      <div class="wrapper">
         <div class="card front-face">
            <img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" class="profilepic">
         </div>
         <div class="card back-face">
            <img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" class="profilepic">
            <div class="info">
               <div class="title">
              </div> 
			  <div>
                <hr>
                <h3>YOUR NAME</h3>
			   <h2><?php echo $user['2']?></h2>
               <hr>
			   <h3>YOUR EMAIL</h3>
			   <h2><?php echo $user['0']?></h2>
               <hr>
			   <h3>YOUR ROLE</h3>
			   <h2><?php echo "REPORTER";?></h2>
               <hr>
			   <h3>USER ID</h3>
			   <h2><?php echo $user['3']?></h2>
               <hr>
           </div>
		   </div>
         </div>
      </div>
	  </div>
      <script>
        function openSidebar() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeSidebar() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
    <script>
    function openSidebar() {
        document.getElementById("mySidebar").style.width = "250px";
    }

    function closeSidebar() {
        document.getElementById("mySidebar").style.width = "0";
    }

    function openEditForm() {
        document.getElementById("editForm").style.display = "block";
    }
</script>
<section id="uploads">
       <center>
                <h2>UPLOAD THE DATA</h2>
            </center>
       <div class="container">
           <div class="row">
               <div class="col-md-6 offset-md-3">
                   <div class="form-container">
                       <h2 class="text-center">Change your profile</h2>
                       <form action="upload_profile.php" method="post" enctype="multipart/form-data" id="upload-form">
                           <div class="mb-3">
                               <label for="image" class="form-label">Select File</label>
                               <input type="file" class="form-control" id="image" name="image">
                           </div>
                           <div class="mb-3">
                               <label for "title" class="form-label">email</label>
                               <input type="text" class="form-control" id="title" name="title">
                           </div>
                           <button type="submit" class="btn btn-primary">Upload File</button>
                       </form>
                   </div>
               </div>
           </div>
</div>
       </form>
   </section>
<center>
<div id="meetingsposted">
    <h2>YOUR POSTED MEETINGS</h2>
<?php
        

        // Check if the session variable 'records' exists
        if (isset($_SESSION['user_meet'])) {
            $user_meet = $_SESSION['user_meet'];

            // Loop through the records and display them in two columns
            for ($i = 0; $i < count($user_meet); $i++) {
                echo '<div class="record">';
                echo "<p><strong>placename:</strong> <span style='color: #007f3f;'>" . $user_meet[$i]['placename'] . "</span></p>";
                echo "<p><strong>meetingname:</strong> <span style='color: #0099cc;'>" . $user_meet[$i]['purpose'] . "</span></p>";
                echo "<p><strong>address:</strong> <span style='color: #007f3f;'>" . $user_meet[$i]['address'] . "</span></p>";
                echo "<p><strong>data and time:</strong> <span style='color: #0099cc;'>" . $user_meet[$i]['time'] . "</span></p>";
                
                echo "</div>";

                // Start a new row for the next two records
                if (($i + 1) % 2 === 0) {
                    echo '<div style="clear: both;"></div>'; // Clear the float to start a new row
                }
            }
        } else {
            echo "<p>No meetings posted.</p>";
            echo "<p>you haven't posted any meeting yet.</p>";

        }
        ?>   

</div>
    </center>
   <!-- Button to toggle the form visibility -->
<center>
    <br>
    <button onclick="toggleForm()" id="postmeet">click to post meetings</button>
    <br>
    <br>
</center>

<!-- Form initially hidden -->
<section id="userInput" style="display: none;">
   <!-- Add the form for users to input data -->
   <div class="form-container">
    <h2 class="text-center">User Input Form</h2>
    <form action="user_posted.php" method="post">
    <div class="mb-3">
            <label for="mail" class="form-label">Email:</label>
            <input type="text" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="mb-3">
            <label for="place_name" class="form-label">place Name:</label>
            <input type="text" class="form-control" id="place_name" name="place_name" required>
        </div>
        <div class="mb-3">
            <label for="purpose" class="form-label">Purpose:</label>
            <textarea class="form-control" id="purpose" name="purpose" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">TIME.. format(YYYY-MM-DD HH:MI:SS)</label>
            <input type="text" class="form-control" id="time" name="time" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</section>
<script>
    function toggleForm() {
        var formSection = document.getElementById("userInput");
        if (formSection.style.display === "none") {
            formSection.style.display = "block";
        } else {
            formSection.style.display = "none";
        }
    }
</script>
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



<!-- this is for profile updating -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function deleteImage(imageId) {
            $.ajax({
                url: "delete_images.php",
                type: "POST",
                data: {
                    id: imageId
                },
                success: function(data) {
                    alert(data);
                    loadImages();
                }
            });
        }

        // Define loadImages in the global scope
        function loadImages() {
            $.ajax({
                url: "get_profile.php",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    // alert(data);
                    console.log(data);
                    let imageList = $('#image-list');
                    imageList.empty(); // Clear the previous images
                    $.each(data, function(key, val) {
                        // Create a responsive image card
                       $('.profilepic').attr("src",`${val.url}`);
                    });
                }
            });
        }
        $(document).ready(function() {
            // Call the function to load images on page load
            loadImages();

            // Submit the upload form using AJAX
            $("#upload-form").submit(function(e) {
                e.preventDefault();

                let form = $(this);
                let formData = new FormData(form[0]);
                $.ajax({
                    url: form.attr("action"),
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        alert(data);
                        loadImages();
                        form[0].reset();
                    }
                });
            });
        });
    </script>
    <!-- Add the form for users to input data -->



   </body>

</html>