<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>

table, th, td {
    background-color:black;
}
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
    width: 20%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
    width: 20%;
}

</style>
</head>
<body>
<?php
 session_start();
if(isset($_SESSION['uname']))
{
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
if($conn)
{
    $dbsearch="SELECT * FROM payment";
    $stid = oci_parse($conn, $dbsearch);
    oci_execute($stid);
    ?>
    <div class="bg-img">
<div class="container">
<font color="yellow"><table border="5" bgcolor="#00FF00" align="center">
<tr>
<th>Payment ID</th><th>Card Number</th><th>Name on card</th><th>Cvv</th><th>Total amount</th><th>Reservation ID</th><th>Expiry Month</th><th>Expiry Year</th></tr>
<?php

    while ($row = oci_fetch_array($stid, OCI_NUM)) {//echo $_SESSION['uname'];
        ?>
        <tr><td><?php echo $row[0]; ?> </td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td> 
    </tr>

   <?php
}
?>

</table></font>
<center><a class="btn btn-secondary btn-secondary display-4" href="apanel.php">Back</a></center>
</div>
</div>
<?php
}
else
{	?>
	<center><h1><font color="white"><b>CAN'T DISPLAY</b></font></h1></center>
	<a class="btn btn-secondary btn-secondary display-4" href="display.php">Retry</a>
<?php
}
}
else
{
    echo "<script>location.href='admin.php'</script>";
}
?>
 </body>
</html>

