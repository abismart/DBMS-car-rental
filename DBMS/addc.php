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
    background-color: lightblue;
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
    background-color: black;
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
    background-color: white;
}

</style>
</head>
<body>
   <?php
    session_start();
if(isset($_SESSION['uname']))
{?>
    <div class="container">
    <center><h1><font color="white"><b>ADD CAR</b></font></h1></center>    
    </div>
    <h3></h3>
<div class="container">
    <h3><font color="white"><b>ENTER CAR DETAILS</b></font></h3>
   <div class="row"> 
<div class="col-sm-6">
  <form action="addcar.php" onsubmit="return validate()" method="post">
    <label for="cid"><font color="white">Car ID</font></label>   
    <br/> <input type="number" id="cid" name="carid" placeholder="Enter car id.. " required>
<br/>
    <label for="bname"><font color="white">Brand</font></label>
<br/>    <input type="text" id="bname" name="brandname" placeholder="Enter brand name.. " required>
<br/>
    <label for="seat"><font color="white">Seating Capacity</font></label>
  <br/>  <input type="number" id="seat" name="scap" placeholder="Enter no of seats.. " required>
<br/>
    <label for="price"><font color="white">Price Per day</font></label>
    <br/><input type="number" id="price" name="ppd" placeholder="Enter price.. " required>
<br/>
    <label for="model"><font color="white">Model Name</font></label>
    <br/><input type="text" id="model" placeholder="Enter Model name.." name="mname" required>
<br/>
    <label for="fuel"><font color="white">Fuel</font></label><br/>
    <select id="fuel" name="ftype">
      <option value="petrol">Petrol</option>
      <option value="diesel">Diesel</option>
    </select>
<br/>
<label for="seat"><font color="white">Availability</font></label>
  <br/>  <input type="number" id="seat" name="avai" placeholder="Enter no of cars.. " required>
<br/>
    <input  class="btn btn-md" type="submit" value="Add">
<h3></h3>
     </form>
     <br/>
    <a class="btn btn-secondary btn-secondary display-4" href="apanel.php">Back</a>
<!--form validation-->
<script>
            function validate()

                {
                    var brand=document.getElementById("bname");
                    var model=document.getElementById("model");
                    var fuel=document.getElementById("fuel");
                    var letters= /^[A-Za-z]+$/;
                    var numbers= /^[0-9]+$/;
                    var letternum=/^[A-Za-z0-9_@]+$/;
                    if(brand.value.match(letters))
                    {
                        
                    }
                    else
                    {
                        alert("enter a valid brand name");
                        return false;
                    }
                    if(model.value.match(letters)||model.value.match(letternum))
                    {
                        
                    }
                    else
                    {
                        alert("enter a valid model name");
                        return false;
                    }
                return true;

                }
                   
                
 
        </script>








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
</div>
</div>
</div>
<?php
}
else
{
    echo "<script>location.href='admin.php'</script>";
}
?>
</body>
</html>
