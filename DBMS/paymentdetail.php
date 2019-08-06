<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-color: lightblue;}
* {box-sizing: border-box;}


input[type=text],input[type=month],input[type=tel],input[type=number],input[type=password],input[type=Email], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=text],input[type=month],input[type=number],input[type=tel],input[type=password],input[type=Email],textarea{
    background-color: lightblue;
}
input[type=text]:hover,input[type=password]:hover,input[type=month]:hover,input[type=tel]:hover,input[type=Email]:hover,textarea:hover,input[type=number]:hover{
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
    background-color: black;
    padding: 20px;
}

/* Set a style for the submit button */
.bt {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
}

.bt:hover {
    opacity: 1;
    width: 20%;
    background-color: white;
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
    background-color: white;
}

</style>
</head>
<body>

<?php
 session_start();
if(isset($_SESSION['firstname']))
{
$a=$_POST['paymentid'];
$b=$_POST['cardnumber'];
$c=$_POST['name'];
$d=$_POST['emon'];
$g=$_POST['eyear'];
$e=$_POST['cvvno'];
$f=$_POST['reservationid'];
$h=$_POST['carid'];
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
if($conn)
{ 
    $dbins="insert into payment(payid,cardno,name_on_card,cvv,resrvationid,expi_mon,expi_year,carrid)
    values( '$a','$b','$c','$e','$f','$d','$g','$h')";
    $result1=oci_parse($conn,$dbins);
    if(oci_execute($result1))
    {
       // echo "new row is created";
    }
    else
    {
        //echo "error-not inserted";
    }
?>
<div class="container">
    <center><h1><font color="white"><b>TOTAL AMOUNT</b></font></h1></center>    
    </div>

<h3></h3>
<div class="container">
    
   <div class="row"> 
<div class="col-sm-6">
  <form action="totalamt.php" onsubmit="return validate()" method="post">
    <label for="lno"><font color="white">License No</font></label>   
    <br/> <input type="text" id="lno" name="licensno" placeholder="Enter License number.. " required>
<br/>
    <input  class="btn btn-md" type="submit" value="Get Total">
<h3></h3>
     </form>
<!--form validation-->

</div>
    <div class="col-sm-6">
    <div class="w3-content w3-section" style="max-width:500px">
        <center>
        <img class="mySlides" src="car1.jpg" class="img-rounded" style="width:100%">
        <img class="mySlides" src="car2.jpg" class="img-rounded" style="width:100%">
        <img class="mySlides" src="car7.jpg" class="img-rounded" style="width:100%">
        <img class="mySlides" src="car3.jpg" class="img-rounded" style="width:100%">
        <img class="mySlides" src="car4.jpg" class="img-rounded" style="width:100%">
        <img class="mySlides" src="car5.jpg" class="img-rounded" style="width:100%">
        </center>
    </div>
    <script>
    var myIndex = 0;
    carousel();
    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
        <h3></h3>
        <h1></h1>   
        <a href="reg.jpg" target="_blank">
            <img src="reg.jpg" class="img-rounded" alt="Cinque Terre" width="530" height="436">
        </a>
        </div>
<?php
}
}
else
{
    echo "<script>location.href='usrlogin.php'</script>";
}
?>
</div>
</div>
 </body>
</html>