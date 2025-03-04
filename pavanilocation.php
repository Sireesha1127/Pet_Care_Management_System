<?php
include "connection.php";
include "header.php";
if(!isset($_SESSION['u_data'])){
    header("Location:index.html");
}
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
            background-color: black ;
            color: aqua;
            padding: 30px 10px 10px; /* Decreased padding to decrease the height */
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
        .navbar img{
            
            text-align: center;
            padding: 5px 0px;
            text-decoration: none;
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
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
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
        

        .options {
            margin-top: 20px;
        }

        .options button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .options button:hover {
            background-color: #45a049;
        }

        .options select {
            padding: 10px;
            font-size: 16px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-out;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
            color: #555;
        }

        th {
            background-color: #4CAF50;
            color: white;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
        <a href="#">LOCATION</a>
        <a href="yagnareporters.php">MEETINGS</a>
        <a href="logout.php">LOGOUT</a>
    </div>
    <center>
        <div id="head">
    <h2 style="color:aqua;background-color:gray;display:inline-block;padding:6px;border-radius:5px;">&nbsp; &nbsp; PRESS MEET SHEDULING&nbsp; &nbsp;</h2></div>
    </center>
    

    <div class="container">
        <h1>SELECT YOUR LOCATION</h1>
        <div class="options">
            <button id="option1"><b>CHOOSE BY PLACE</b></button>
            <button id="option2"><b>CHOOSE BY MAP</b></button>
        </div>
        <div class="selections" style="display: none;">
            <h2>Select Options</h2>
            <form  method="post">

            <select id="optionsSelect" name="place">
                <option value="Yetapaka">YETAPAKA</option>
                <option value="Rampachodavaram">RAMPACHODAVARAM</option>
                <option value="Peddapuram">PEDDAPURAM</option>
                <option value="Rajamahendravaram">RAJAMAHENDRAVARAM</option>
                <option value="Ramachandrapuram">RAMACHANDRAPURAM</option>
                <option value="Amalapuram">AMALAPURAM</option>
                <option value="Kakinada">KAKINADA</option>
            </select><br><br>
            <input type="button" name="submit" id="button" value="Get meetings" />
    </form>
        </div>
        <div class="image-map" style="display: none;">
            <img src="map2.png" alt="Interactive Map" usemap="#image-map">
            <map name="image-map">
                <area shape="poly" coords="37,121,45,133,43,145,53,142,61,144,67,154,81,153,104,162,116,162,121,173,128,186,145,185,153,193,168,192,168,177,173,165,176,156,181,142,196,132,208,121,223,112,233,101,219,101,201,101,193,113,172,113,151,110,133,112,120,113,111,104,97,98,85,108,76,114,69,125,51,117"  alt="Area 1" onclick="Yetapaka()">
                <area shape="poly" coords="227,96,233,81,256,74,273,68,283,72,287,82,280,96,288,109,277,104,269,113,255,124,251,132,267,132,276,121,288,137,287,149,283,156,299,156,309,149,323,161,328,152,339,154,352,157,360,160,361,170,363,178,352,190,341,202,328,214,324,226,316,222,307,212,300,222,303,233,296,234,285,232,277,233,268,240,257,233,247,238,241,252,225,252,212,245,204,237,203,245,195,233,191,222,184,212,173,206,165,193,168,181,172,170,175,157,179,148,187,138,197,129,208,118,221,114,233,98,233,106" alt="Area 2" onclick="Rampachodavaram()">
                <area shape="poly" coords="201,248,211,248,219,258,227,253,240,253,244,236,245,246,257,240,267,242,280,237,293,233,288,241,276,248,275,257,281,262,292,264,299,268,305,278,296,285,287,280,277,280,271,290,276,297,279,310,268,318,260,326,260,340,267,348,271,361,260,364,253,356,243,344,239,332,237,317,225,310,221,294,209,285,204,269,200,258" alt="Area 2" onclick="Rajamahendravaram()">
                <area shape="poly" coords="385,265,376,258,373,249,364,249,356,241,347,245,351,254,336,246,335,258,332,269,329,280,337,284,348,288,345,300,336,308,327,310,320,313,309,317,304,308,301,297,307,284,304,274,295,264,285,264,276,256,277,245,289,241,300,238,300,224,303,212,313,212,312,225,321,232,331,226,323,218,336,209,344,200,353,192,361,182,371,181,381,189,391,181,399,180,408,176,415,181,425,189,417,214,413,229,413,238,405,250,397,258,421,201" alt="Area 2" Onclick="Peddapuram()">
                <area shape="poly" coords="343,302,347,286,329,282,333,266,333,249,348,260,348,249,361,252,371,248,379,260,387,266,367,286,347,325,368,310,355,306,375,328,375,349,372,368,364,366,340,357,339,345,328,340,317,348,313,338,325,329,332,314" alt="Area 2" Onclick="Kakinada()">
                <area shape="poly" coords="269,286,279,281,299,285,295,292,304,294,304,308,309,317,321,312,332,309,327,320,319,329,313,337,315,344,321,346,327,337,336,342,341,352,333,361,324,365,316,357,308,361,296,362,289,370,287,380,275,378,267,373,265,365,272,353,265,348,260,338,261,325,271,317,281,312,272,304,279,292" alt="Area 2" onclick="Ramachandrapuram()">
                <area shape="poly" coords="227,474,227,461,229,440,243,441,259,425,259,410,249,432,255,392,243,380,239,366,228,354,227,340,227,328,228,312,236,318,239,328,241,340,251,350,257,364,268,374,280,380,288,374,291,361,303,364,313,358,325,364,337,376,349,377,357,372,364,362,368,372,364,392,355,408,341,420,325,425,315,432,304,437,292,445,279,452,264,456,252,458,243,468" alt="Area 2" Onclick="Amalapuram()">                
            </map>
        </div>
    </div>

    <div id="tb">      
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
        $('#button').on('click',function(){
            $.ajax({
                url:"meeting.php",
                type:"POST",
                data:{place:$("#optionsSelect").val()},
                success:function(data) {
                    // $("#td").;
                    $("#tb").html(data)
                }
                
            })
        })
    </script>

    <script>
         const option1Button = document.getElementById('option1');
        const option2Button = document.getElementById('option2');
        const selectionsDiv = document.querySelector('.selections');
        const imageMapDiv = document.querySelector('.image-map');
    
        option1Button.addEventListener('click', () => {
            selectionsDiv.style.display = 'block';
            imageMapDiv.style.display = 'none';
        });

        option2Button.addEventListener('click', () => {
            selectionsDiv.style.display = 'none';
            imageMapDiv.style.display = 'block';
        });

        const optionsSelect = document.getElementById('optionsSelect');
        const showSelectionButton = document.getElementById('showSelection');
        showSelectionButton.addEventListener('click', () => {
            alert(`You selected: ${optionsSelect.value}`);
        });
        function openSidebar() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeSidebar() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
    <script>
        var selectedplace="";
      function Yetapaka() {
        selectedplace="yetapaka";
        // alert("You clicked the Yetapaka");
        fetchData();
      }
      function Rampachodavaram() {
        selectedplace="rampachodavaram";
        // alert("you have clicked the Rampachodavaram");
        fetchData();
      }
      function Peddapuram() {
        selectedplace="peddapuram";
        // alert("you have clicked the Peddapuram");
        fetchData();
      }
      function Rajamahendravaram() {
        selectedplace="rajamahendravaram";
        // alert("you have clicked the Rajamahendravaram");
        fetchData();
      }
      function Ramachandrapuram() {
        selectedplace="ramachandrapuram";
        // alert("you have clicked the Ramachandrapuram");
        fetchData();
      }
      function Amalapuram() {
        selectedplace="amalapuram";
        // alert("you have clicked the Amalapuram");
        fetchData();
      }
      function Kakinada() {
        selectedplace="kakinada";
       
        fetchData();
      }
      function fetchData() {
    $.ajax({
        url: "meeting.php",
        type: "POST",
        data: { place: selectedplace },
        success: function (data) {
            $("#tb").html(data);
        }
    });
}
    </script>
    <script>
       
        </script>
    </body>
</html>
