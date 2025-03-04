<?php
include("./header.php");
if(!isset($_SESSION['a_data'])){
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
        }

        #sidebar {
            position: fixed;
            min-width: 250px;
            max-width: 250px;
            background: #333;
            color: #fff;
            transition: all 0.3s;
            height: 100vh; /* Set sidebar to full height of the viewport */
        }

        #sidebar a {
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: background-color 0.3s;
        }

        #sidebar a:hover {
            background-color: #555;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #222;
        }

        .sidebar-header {
            text-align: center;
            padding: 10px;
        }

        #content {
            width: 100%;
            padding: 15px;
            margin-left: 250px; /* Adjust content area to accommodate fixed sidebar */
        }

        section {
            padding: 20px;
        }

        .animated-form {
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
            animation: fadeInUp 1s ease-out;
            background-color: #f8f8f8; /* Added background color */
            padding: 20px;
            border:2px solid gray;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Added box shadow for a subtle effect */
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated-form label,
        .animated-form input,
        .animated-form textarea,
        .animated-form button {
            display: block;
            margin-bottom: 15px;
            width: 100%;
        }

        .animated-form label {
            font-weight: bold;
        }

        .animated-form input,
        .animated-form textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .animated-form button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .animated-form button:hover {
            background-color: #555;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border: 2px solid gray;
            background-color: #f8f8f8;
            border-radius: 5px;
        }

        .responsive-img {
            max-width: 100%;
            height: auto;
        }

        #header1 {
            background-color: gray;
            border-radius: 10px;
            color: aqua;
            padding: 15px; /* Added padding for better visibility */
        }
    </style>
</head>

<body>
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>MENU</h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="#">DATA</a>
            </li>
            <li>
                <a href="#uploads">UPLOADS</a>
            </li>
            <li>
                <a href="#uploaded_images">IMAGES</a>
            </li>
            <li>
                <a href="logout.php">LOGOUT</a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <header>
            <center><h1 id="header1">ADMIN PAGE</h1></center>
        </header>

        <section>
            <center>
                <h2>INSERT THE DATA</h2>
            </center>

            <form class="animated-form" method="post" action="insertmeeting.php">
        <label for="placename">PLACE:</label>
        <input type="text" id="placename" name="placename" required>

        <label for="venue">VENUE</label>
        <input type="text" id="venue" name="venue" required>

        <label for="time">TIME.. format(YYYY-MM-DD HH:MI:SS)</label>
        <input type="text" id="time" name="time" required>

        <label for="message">MEETING PURPOSE</label>
        <textarea id="message" name="purpose" rows="4" required></textarea>
        

        <button type="submit">Submit</button>
    </form>
    </section>

    <section id="uploads">
       <center>
                <h2>UPLOAD THE DATA</h2>
            </center>
       <div class="container">
           <div class="row">
               <div class="col-md-6 offset-md-3">
                   <div class="form-container">
                       <h2 class="text-center">File Upload Form</h2>
                       <form action="upload_image.php" method="post" enctype="multipart/form-data" id="upload-form">
                           <div class="mb-3">
                               <label for="image" class="form-label">Select File</label>
                               <input type="file" class="form-control" id="image" name="image">
                           </div>
                           <div class="mb-3">
                               <label for "title" class="form-label">Text Input</label>
                               <input type="text" class="form-control" id="title" name="title">
                           </div>
                           <button type="submit" class="btn btn-primary">Upload File</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   
       <h2 class="text-center mt-5" id="uploaded_images">Uploaded Images</h2>
       <div  class="container text-center">
           <div class="row" id="image-list">
   
           </div>
           <!-- Images will be displayed here -->
       </div>
       </form>
   </section>
        
    </div>

    <!-- ... (your existing scripts) -->
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
                url: "get_images.php",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    let imageList = $('#image-list');
                    imageList.empty(); // Clear the previous images
                    $.each(data, function(key, val) {
                        // Create a responsive image card
                        let imageCard = `<div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="${val.url}" class="card-img-top responsive-img" alt="Image">
                                <div class="card-body">
                                    <h5 class="card-title">${val.title}</h5>
                                    <button class="btn btn-danger" onclick="deleteImage(${val.id})">Delete</button>
                                </div>
                            </div>
                        </div>`;
                        imageList.append(imageCard);
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
</body>

</html>
