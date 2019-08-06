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
    background-image: url("car7.jpg");
height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}



body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text],input[type=password], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
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
    background-color: #45a049;
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


/* Set a style for the submit button */


.bt {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width:50%;
    opacity: 0.9;
}

.bt:hover {
    opacity: 1;
    width:50%;
}


</style>
</head>
<body>
<?php
$uname="Abishek";
$pwd="admin";

session_start();
if(isset($_SESSION['uname']))
{   
?>
<div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <font size="16"><strong><center><?php echo " ".$_SESSION['uname']." "; ?></center></strong></font>
    </div>
    <div class="bg-img">
<div class="container">
    <center><h1><font color="white" size="300"><b>ADMIN PANNEL</b></font></h1></center>
</div>
<div class="container">
    <div class="row">
            <div class="col-sm-4">
            <center><a class="btn btn-secondary btn-secondary display-4" href="cdisplay.php">Display customers</a></center>
        </div>  
        <div class="col-sm-4">


            <center><a class="btn btn-secondary btn-secondary display-4" href="pdisplay.php">Display payments</a></center>

        </div>
        <div class="col-sm-4">


            <center><a class="btn btn-secondary btn-secondary display-4" href="rdisplay.php">Display reservatons</a></center>

        </div>
        </div>  
</div>

<div class="container">
    <div class="row">
            <center><h1><font color="white"><b></b></font></h1></center>
        </div>    
</div>

<div class="container">
    <div class="row">
          <div class="col-sm-4">

           <center><a class="btn btn-secondary btn-secondary display-4" href="addc.php">Add Car</a></center> 

        </div>
        <div class="col-sm-4">


            <center><a class="btn btn-secondary btn-secondary display-4" href="del.php">Delete Payments</a></center>

        </div>
        <div class="col-sm-4">


            <center><a class="btn btn-secondary btn-secondary display-4" href="display.php">View Car</a></center>

        </div>
        </div>    
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <center><a class="btn btn-secondary btn-secondary display-4" href="update2.php">Update</a></center>
        </div>
        <div class="col-sm-6">
           <center><a class="btn btn-secondary btn-secondary display-4" href="Ser.php">Search</a></center>
        </div>
        </div>    
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        </div>    
         <div class="col-sm-4">
            <center><a class="btn" href="logout.php">Logout</a></center>
        </div>
         <div class="col-sm-4">
        </div>
    </div>
</div>
    <?php
}
else{
    if($_POST['uname'] == $uname && $_POST['pwd'] == $pwd)
    {
        $_SESSION['uname']=$uname;
        echo "<script>location.href='apanel.php'</script>";
    }
    else
    {
        echo "<script>alert('username or password is incorrect!')</script>";
        echo "<script>location.href='admin.php'</script>";
    }
}
?>
</div>
</body>
</html>