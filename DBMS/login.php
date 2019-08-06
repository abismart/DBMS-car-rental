<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    background-size:cover;
}


* {
    box-sizing: border-box;
}

.pull-left{float:none!important}

.bg-img {
    /* The image used */
    background-image: url("car7.jpg");
height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bg-image {
    /* The image used */
    background-image: url("car2.jpg");
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
    width:100%;
    opacity: 0.9;
}

.bt:hover {
    opacity: 1;
    width:100%;
}


</style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['firstname']))
{
    $a=$_SESSION['firstname'];
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
   $dbsearch="SELECT fname,lname FROM login   where user_name='$a'";
    $stid = oci_parse($conn, $dbsearch);
    oci_execute($stid);
    while ($row = oci_fetch_array($stid, OCI_NUM))
    {   
?>

    <div class="bg-img">
<div class="container">
    <i class="fa fa-circle text-success"></i><font color="white"><strong><?php echo "".$row[0]." ".$row[1]; }?></strong></font>
    <center><h1><font color="white" size="300"><b>CAR RENTAL</b></font></h1></center>
</div>
<div class="container">
    <div class="row">
            <center><h1><font color="white"><b></b></font></h1></center>
        </div>    
</div>

<div class="container">
    <div class="row">
            <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <center><a class="btn btn-secondary btn-secondary display-4" href="rent_cusdetails.php">Rent a Car</a></center>
        </div>
        <div class="col-sm-4">
        </div>
        </div>    
</div>

<div class="container">
    <div class="row">
          <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <center><a class="btn btn-secondary btn-secondary display-4" href="return.html">Return a Car</a></center>
        </div>
        <div class="col-sm-4">
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
        </div>    
         <div class="col-sm-4">
            <center><a class="btn" href="usrlogin.php">Logout</a></center>
        </div>
         <div class="col-sm-4">
        </div>
    </div>
</div>
</div>
    <?php
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$a=$_POST['firstname'];
$b=$_POST['psw'];
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
   $dbsearch="SELECT * FROM login   where user_name='$a' and password='$b'";
    $stid = oci_parse($conn, $dbsearch);
    oci_execute($stid);
    if($row = oci_fetch_array($stid, OCI_NUM))
    {
        if($_POST['firstname'] == $a && $_POST['psw'] == $b)
    {
        $_SESSION['firstname']=$a;
        echo "<script>location.href='login.php'</script>";
    }   
    }
    else
    {
        echo "<script>alert('username or password is incorrect!')</script>";
        echo "<script>location.href='main.html'</script>";
        echo "s";
    }
}
else
    {
        echo "<script>alert('username or password is incorrect!')</script>";
        echo "<script>location.href='main.html'</script>";
       // echo "s";
    }
?>
</body>
</html>