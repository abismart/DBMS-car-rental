<!DOCTYPE html>
<html>
<head>

<title>registration</title>
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
$a=$_POST['username'];
$b=$_POST['firstname'];
$c=$_POST['lastname'];
$d=$_POST['psw'];
$e=$_POST['email'];
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
if($conn)
{
		//echo "Connection succeded";
	$dbins="insert into login (user_name,fname,lname,password,emailid)
	values( '$a','$b','$c','$d','$e')";
	$result1=oci_parse($conn,$dbins);
	if(oci_execute($result1))
	{
		//echo "new row is created";
	}
	else
	{
		//echo "error-not inserted";
	}

	?>


	<div class="alert alert-success alert-dismissible fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong><h1>REGISTERED SUCCESSFULLY</h1></strong>
	</div>
<div class="bg-img">
<div class="container">
   <div class="row"> 
<div class="col-sm-6">
    <center><h1><font color="white"><b>User LOGIN</b></font></h1></center>
  <form action="login.php" method="post">
    <label for="fname"><font color="white">User Name</font></label>
    <br/><input type="text" id="fname" name="firstname" placeholder="Enter User name..">
<br/>
    <label for="psw"><font color="white">Password</font></label>
    <br/><input type="password" placeholder="Enter Password" name="psw" required>

<br/>
    <input  class="btn btn-md" type="submit" value="Login">
<h3></h3>
    </form>
    <br/>
    <a class="btn btn-secondary btn-secondary display-4" href="usereg.html">Register</a>
<h3></h3>
    <br/>
    <a class="btn btn-secondary btn-secondary display-4" href="index.html">Back</a>
  
</div>
<div class="col-sm-6">
    <center><h1><font color="white"><b>Admin LOGIN</b></font></h1></center>
    <h1></h1><br/>
    <h1></h1><br/>
    <h1></h1><br/>
    <h1></h1><br/>
    <center><a class="btn btn-secondary btn-secondary display-4" href="admin.html">Admin</a></center>

</div>
</div>
</div>
</div>


	<?php
}
else
{	?>
	<center><h1><font color="white"><b>REGISTRATION FAILED</b></font></h1></center>
	<a class="btn btn-secondary btn-secondary display-4" href="usereg.html">Retry</a>
<?php
}
?>
 </body>
</html>