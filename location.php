<?php
include "connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>locationpage</title>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <div id="formbox">
    <form  method="post">
<select name="place" id="sel">
<option value="ramachandrapuram">rampachodavaram</option>
<option value="amalapuram">amalapuram</option>
<option value="rayavaram">rayavaram</option>
<option value="ravulapalem">ravulapalem</option>
<option value="rajahmundry">rajahmundry</option>
</select>
<br><br><br>
<input type="button" name="submit" id="button" value="Get meetings" />
</form>
</div>
<div id="tb">      
    </div>
    <script>
        $('#button').on('click',function(){
            $.ajax({
                url:"meeting.php",
                type:"POST",
                data:{place:$("#sel").val()},
                success:function(data) {
                    // $("#td").;
                    $("#tb").html(data)
                }
                
            })
        })
    </script>
</body>
</html>