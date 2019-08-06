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
    background-image: url("car6.jpg");
height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}



body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=number],input[type=password], select, textarea {
    width: 100%;
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
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
    width: 100%;
}

</style>
</head>
<body>
<?php
$a=$_POST['carid'];
//echo $a;
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
if($conn)
{   $dbupdate="UPDATE car SET  avail=avail+1 where car.cid in (select carid from reservation,customer where reservation.licenseno=customer.licno and customer.licno='$a')";
   //$dbupdate="UPDATE car SET avail = avail+1 WHERE cid = 1";
    $result = oci_parse($conn,$dbupdate);
    if($result)
    {
      //  echo "Updated";
    }
    oci_execute($result);
    ?>
    <div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <center><strong><h1>RETURNED SUCCESSFULLY</h1></strong></center>
    </div>
     <div class="bg-img">
<div class="container">
    <center><h1><font color="white"><b>RETURN CARS</b></font></h1></center>
   <div class="row"> 
<div class="col-sm-4">

</div>    
<div class="col-sm-4">
  <form action="ret.php" method="post">
    <label for="fname"><font color="white">License number</font></label>
    <br/><input type="number" id="fname" name="carid" placeholder="Enter License number.. " required>
<br/>
    <input  class="btn btn-md" type="submit" value="Return">
<h3></h3>
    <br/>
    <a class="btn btn-secondary btn-secondary display-4" href="login1.html">Back</a>
  </form>
</div>
</div>
</div>
</div>
<?php    
}
?>
 <center><a class="btn" href="return.html">Logout</a></center>
</body>
</html>