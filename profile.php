<?php
include "header.php";
if(isset($_SESSION['u_data'])){
    $user=$_SESSION['u_data'];
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  color:
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
img{
    height: 200px;
    /* width:10px; */
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="./profileimage.jpeg" alt="John" style="width:100%">
  <!-- <h1>YOUR PROFILE</h1> -->
 <p>YOUR NAME</p>
 <h1><?php echo $user['2']?></h1>
 <p>YOUR EMAIL</p>
 <h1><?php echo $user['0']?></h1>
 <p>YOUR PASSWORD</p>
 <h1><?php echo $user['1']?></h1>
 <p>YOUR CHANNELID</p>
 <h1><?php echo $user['3']?></h1>

 
  </div>
 <center> <p><button>update</button></p></center>
</div>

</body>
</html>

