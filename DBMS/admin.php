<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>


body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    background-size:cover;
}


* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("car10.jpg");
height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}



body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],input[type=number],input[type=tel],input[type=password],input[type=Email], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}


input[type=text],input[type=number],input[type=tel],input[type=password],input[type=Email],select{
    background-color: yellow;
}


input[type=text]:hover,input[type=password]:hover,input[type=number]:hover,input[type=tel]:hover,input[type=Email]:hover,select:hover{
    background-color: white;
}


input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:white;
}

.container {
    border-radius: 5px;
    background-color: ;
    padding: 20px;
}


/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
    width: 50%;
}

</style>
</head>
<body>
    <div class="bg-img">
<div class="container">
    <center><h1><font color="white"><b>ADMIN LOGIN</b></font></h1></center>
   <div class="row"> 
<div class="col-sm-6">
  <form action="apanel.php" name="admin" method='post'>
    <label for="fname"><font color="white">User Name</font></label>
    <br/><input type="text" id="fname" name="uname" placeholder="User name.. " required>
<br/>
    <label for="psw"><font color="white">Password</font></label>
    <br/><input type="password" placeholder="Enter Password" name="pwd" required>

<br/>
    <input  class="btn btn-md" type="submit" value="Submit">
</form>
<h3></h3>
    <br/>
    <a class="btn btn-secondary btn-secondary display-4" href="main.html">Back</a>
</div>

</div>
</div>
</div>
</body>
</html>
