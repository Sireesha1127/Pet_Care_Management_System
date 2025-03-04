<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #box{
            width: 300px;
            height: 500px;
            border: 3px solid aqua;
            background-color: blue;
            /* color: aquamarine; */
            position: fixed;
            top: 30px;
            display: none;
            z-index:2;
        }
      button{
        background-color: black;
        width: 80px;
        color: aqua;
        padding: 3px;
        border-radius: 20px;
      }
      body{
        background-color: blueviolet;
      }
      .dummy{
        width: 200px;
        height: 500px;
        background-color: aliceblue;
        border-color: brown;
        border: 3px solid blueviolet;
        box-shadow: 3px wheat;
      }
    </style>
</head>
<body>
    <center>
        <button id="login">login</button>
    </center>
<center>
    <div class="dummy">
        hellow
    </div>
</center>
<center>
    <div class="dummy">
        hellow
    </div>
</center>
<center>
    <div class="dummy">
        hellow
    </div>
</center>
<center>
    <div class="dummy">
        hellow
    </div>
</center>
<center>
    <div class="dummy">
        hellow
    </div>
</center>

    <div id="box">
         <p>thhsi is the paragraph</p>
    </div>
    <script>
        const login=document.getElementById("login");
        login.onclick=function(){
            document.getElementById("box").style.display="block";
        }
    </script>
</body>
</html>