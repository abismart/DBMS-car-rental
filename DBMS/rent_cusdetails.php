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


input[type=text],input[type=tel],input[type=number],input[type=password],input[type=Email], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=text],input[type=number],input[type=tel],input[type=password],input[type=Email],textarea{
    background-color: lightblue;
}
input[type=text]:hover,input[type=password]:hover,input[type=tel]:hover,input[type=Email]:hover,textarea:hover,input[type=number]:hover{
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
if(isset($_SESSION['firstname']))
{?>
    <div class="container">
    <center><h1><font color="white"><b>CUSTOMER DETAILS</b></font></h1></center>    
    </div>
    <h3></h3>
<div class="container">
    <!--<center><h1><font color="white"><b>USER REGISTRATION</b></font></h1></center>-->
   <div class="row"> 
<div class="col-sm-6">
  <form action="custdetail.php" onsubmit="return validate()" method="post">
    <label for="lno"><font color="white">License No</font></label>   
    <br/> <input type="number" id="lno" name="licenseno" placeholder="Enter License number.. " required>
<br/>
    <label for="fname"><font color="white">Name</font></label>   
    <br/> <input type="text" id="fname" name="firstname" placeholder="Your first name.. " required>
<br/>
    <label for="add"><font color="white">Address</font></label>
<br/>
    <textarea id="add" name="address" placeholder="Enter your address.." style="height:200px"></textarea>
<br/>
    <label for="mn"><font color="white">Mobile Number</font></label>
    <br/><input type="number" id="mobileno" name="mobile" placeholder="Mobile Number.. " required>
<br/>
    <label for="uname"><font color="white">User Name</font></label>
    <br/><input type="text" id="uname" name="username" value=<?php echo $_SESSION['firstname']; ?> readonly >
<br/>
    <input  class="btn btn-md" type="submit" value="Next">
<h3></h3>
     </form>
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
    echo "<script>location.href='usrlogin.php'</script>";
}
?>
</body>
</html>
