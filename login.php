<html>
    <head>
         <!-- Include SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    </head>
    <body>
       
<!-- Include SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>
</html>

<?php
	include("./connection.php");
    include("./header.php");
	if($_SERVER['REQUEST_METHOD']=="POST")
    {   
            $email=$_POST['email'];
            $password=$_POST['password'];
            $role=$_POST['role'];
            $response=[];
            if(!empty($email) && !empty($password) && !empty($role))
            {
                //save to database.
                if($role=="user"){
                $query="select *from user where gmail= '$email' limit 1";
                }
                else{
                    $query="select *from admin where gmail= '$email'limit 1";
                }
                $result=mysqli_query($con,$query);
                if($result)
                {
                    if($result && mysqli_num_rows($result)>0)
                    {
                        $user_data=mysqli_fetch_assoc($result);
                        $u_data=array($user_data['gmail'],$user_data['password'],$user_data['name'],$user_data['channelid']);
                        $pass=$user_data["password"];
                        // echo `<script>alert($pass)</script>`;
                        
                        if($pass==$password)
                        {
                            $response['status']=true;
                            if($role=="user")
                            {
                                $_SESSION['u_data']=$u_data;
                                
                                header("Location: displaytodaymeet.php"); 
                            }
                            if($role=="admin")
                            {
                                $_SESSION['a_data']=$u_data;
                                header("Location: adminpage.php");
                            }
                        }
                        else
                        {
                            $response['status']=false;
                            echo "<script>
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Wrong email or password! Login again',
                           }).then(function() {
                           window.location = 'index.html'; // Redirect to index.html after the alert
                           });
                           </script>";


                        }
                    }
                    else
                {
                    echo "<script>
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Wrong email or password! Login again',
                   }).then(function() {
                   window.location = 'index.html'; // Redirect to index.html after the alert
                   });
                   </script>";
                }
                }
                else
                {
                    echo "<script>
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Wrong email or password! Login again',
                   }).then(function() {
                   window.location = 'index.html'; // Redirect to index.html after the alert
                   });
                   </script>";
                }

            }
		else
		{
            echo "<script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Wrong email or password! Login again',
           }).then(function() {
           window.location = 'index.html'; // Redirect to index.html after the alert
           });
           </script>";
		}
    }
?>