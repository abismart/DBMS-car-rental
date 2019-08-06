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
input[type=text],input[type=month],input[type=number],input[type=tel],input[type=password],input[type=Email],select,textarea{
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
if(isset($_SESSION['uname']))
{?>
    <div class="container">
    <center><h1><font color="white"><b>UPDATE CAR DETAILS</b></font></h1></center>    
    </div>
    <h3></h3>
<div class="container">
    <!--<center><h1><font color="white"><b>USER REGISTRATION</b></font></h1></center>-->
   <div class="row">   
<div class="col-sm-6">
  <form action="update.php" onsubmit="return validate()" method="post">
    <label for="model"><font color="white">Car ID</font></label>
    <br/><input type="text" id="model" placeholder="Enter Car ID.." name="cid" required>
<br/>
    <label for="fuel"><font color="white">Field to be updated</font></label><br/>
    <select id="fuel" name="ftype">
      <option value="brand">Brand</option>
      <option value="s_capacity">Seating Capacity</option>
      <option value="priceperday">PricePerDay</option>
      <option value="modelname">ModelName</option>
      <option value="fuel">Fuel</option>
      <option value="avail">Availability</option>
    </select>
<br/>
<label for="model"><font color="white">New Value</font></label>
    <br/><input type="text" id="model" placeholder="Enter New value" name="new" required>
<br/>
    <input  class="btn btn-md" type="submit" value="Update">
<h3></h3>
     </form>
      <a class="btn btn-secondary btn-secondary display-4" href="apanel.php">Back</a>   
<!--form validation-->
<script>
            function validate()

                {
                    var firstname=document.getElementById("fname");
                    var lastname=document.getElementById("lname");
                    var username=document.getElementById("uname");
                    var password=document.getElementById("p");
                    var confirmpassword=document.getElementById("rp");
                    var mobileno=document.getElementById("mobileno");
                    var emailid=document.getElementById("emailid");
                    var letters= /^[A-Za-z]+$/;
                    var numbers= /^[0-9]+$/;
                    var letternum=/^[A-Za-z0-9_@]+$/;
                    var mailcheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    username_len=username.value.length;
                    password_len=password.value.length;
                    mobileno_len=mobileno.value.length;
                    if(firstname.value.match(letters))
                    {
                        
                    }
                    else
                    {
                        alert("enter a valid first name");
                        return false;
                    }
                    if(lastname.value.match(letters))
                    {
                        
                    }
                    else
                    {
                        alert("enter a valid last name");
                        return false;
                    }
                    if(username_len!=0 && username_len>=7)
                    {
                    if(username.value.match(letternum))
                    {

                    }
                    else
                    {
                        alert("user name can only have alphabets numbers at symbol and underscore.");
                        return false;
                    }
                    }
                    else
                    {
                        alert("user name canot be zero or less than 7");
                        return false;
                    }
                    if(password_len!=0 && password_len>=7)
                    {
                         if(password.value.match(letternum))
                         {

                         }
                        else
                        {
                            alert("password can only have alphabets numbers at symbol and underscore.");
                            return false;
                         }
                    }
                    else
                    {
                        alert("password canot be zero or less than 7");
                        return false;
                        
                    }
                    if(password.value==confirmpassword.value)
                    {

                    }
                    else
                    {
                        alert("give the same password as that of in password textbox in the Re-Type password textbox");
                        return false;
                    }
                    
                    if(mobileno_len!=0 && mobileno_len==10)
                    {
                    
                    }
                    else
                    {
                        alert("mobile number cannot be zero or should be equal to 10 digit.");
                        return false;
                        
                    }
                    if(emailid.value.match(mailcheck))
                    {

                    }
                    else
                    {
                        alert("enter a valid email ID");
                        return false;
                    }
                return true;

                }
                   
                
 
        </script>

</div>
  <div class="col-sm-6">
        <a href="reg.jpg" target="_blank">
            <img src="reg.jpg" class="img-rounded" alt="Cinque Terre" width="530" height="336">
        </a>
        <h3></h3>
        <h1></h1>
        
         <center><h1><font color="blue"><b>AVAILABLE CARS</b></font></h1></center>    
<?php
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
if($conn)
{
    $dbsearch="SELECT * FROM car";
    $stid = oci_parse($conn, $dbsearch);
    oci_execute($stid);
    ?>
<font color="white"><table border="5" bgcolor="yellow" align="center">
<tr>
<th>Car ID</th><th>Brand Name</th><th>Seating capacity</th><th>Price per day</th><th>Model name</th><th>Fuel Type</th><th>Availability</th></tr>
<?php

    while ($row = oci_fetch_array($stid, OCI_NUM)) {
        ?>
        <tr><td><?php echo $row[0]; ?> </td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    </tr>
    
   <?php
}
?>
</table>
</font>
<?php
}
?>
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