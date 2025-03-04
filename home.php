<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar with Background Image</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/home/rguktongole/Downloads/edu/edu.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Navigation Styles */
        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Sidebar Styles */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: rgba(0, 0, 0, 0.7);
            transition: left 0.3s ease-in-out;
            z-index: 2;
        }

        .sidebar.open {
            left: 0;
            top:45px;
        }

        .sidebar .menu {
            list-style: none;
            padding:0;
        }

        .sidebar .menu li {
            padding: 15px;
        }

        .sidebar .menu li a {
            text-decoration: none;
            color: #fff;
            display: block;
        }

        /* Sidebar Icon Styles */
        .sidebar .icon {
            margin-right: 10px;
        }

        /* Media Query for Responsive Sidebar */
        @media (max-width: 768px) {
            .sidebar {
                left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#" onclick="toggleSidebar()">&#9776; Menu</a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <ul class="menu">
            <li><a href="#"><i class="fas fa-home icon"></i> HOME</a></li>
            <li><a href="./profile.php"><i class="fas fa-user icon"></i> PROFILE</a></li>
            <li><a href="map"><i class="fas fa-graduation-cap icon"></i> LOCATION</a></li>
            <li><a href="#"><i class="fas fa-briefcase icon"> CONTACTS</i> </a> FAQ</li>
            <li><a href="#"><i class="fas fa-briefcase icon"> UPDATES</i> </a>FAQ</li>             


        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Your content here -->
        <h1></h1>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }
    </script>
</body>
</html>