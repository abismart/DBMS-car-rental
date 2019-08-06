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
select{
    width: 15%;
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
$a=$_POST['reserid'];
$b=$_POST['picup'];
$c=$_POST['drooff'];
$d=$_POST['sdate'];
$e=$_POST['edate'];
$f=$_POST['licensno'];
$g=$_POST['caid'];
//$con=oci_connect('userame','password','oracle_sid');
$conn = oci_connect('drmbbs','hiteshram99','localhost/XE');
if($conn)
{ 
    $dbins="insert into reservation(resid,pickup,dropoff,startdate,enddate,licenseno,carid,NO_OF_DAYS)
    values( '$a','$b','$c',to_date('$d','yyyy-mm-dd'),to_date('$e','yyyy-mm-dd'),'$f','$g',to_date('$e','yyyy-mm-dd')-to_date('$d','yyyy-mm-dd'))";
    $result1=oci_parse($conn,$dbins);
    if(oci_execute($result1))
    {
        //echo "new row is created";
    }
    else
    {
        //echo "error-not inserted";
    }
$uni_id = rand(1,99);
    ?>
    <div class="container">
    <center><h1><font color="white"><b>PAYMENT DETAILS</b></font></h1></center>    
    </div>
    <h3></h3>
<div class="container">
    <!--<center><h1><font color="white"><b>USER REGISTRATION</b></font></h1></center>-->
   <div class="row"> 
<div class="col-sm-6">
  <form action="paymentdetail.php" onsubmit="return validate()" method="post">
    <label for="uname"><font color="white">Payment ID :</font></label>
    <br/><input type="text" name="paymentid" value=<?php echo $uni_id;?> readonly> 
<br/>
<label for="cid"><font color="white">Card Number</font></label>   
    <br/> <input type="number" id="cid" name="cardnumber" placeholder="Enter card number.. " required>
<br/>
<label for="fname"><font color="white">Name on card</font></label>   
    <br/> <input type="text" id="fname" name="name" placeholder="Your first name.. " required>
<br/>
    <label for="fuel"><font color="white">Expiry Month-</font></label><label for="fuel"><font color="white">Expiry Year</font></label><br/>
    <select id="mon" name="emon">
      <option value="1" selected>01</option>
      <option value="2">02</option>
      <option value="3">03</option>
      <option value="4">04</option>
      <option value="5">05</option>
      <option value="6">06</option>
      <option value="7">07</option>
      <option value="8">08</option>
      <option value="9">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    <select id="mon" name="eyear">
      <option value="2018" selected>2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
      <option value="2026">2026</option>
      <option value="2027">2027</option>
      <option value="2028">2028</option>
      <option value="2029">2029</option>
      <option value="2030">2030</option>
      <option value="2031">2031</option>
      <option value="2032">2032</option>
      <option value="2033">2033</option>
      <option value="2034">2034</option>
      <option value="2035">2035</option>
      <option value="2036">2036</option>
      <option value="2037">2037</option>
      <option value="2038">2038</option>
    </select>
<br/>
<label for="cid"><font color="white">CVV</font></label>   
    <br/> <input type="password" id="cid" name="cvvno" placeholder="Enter cvv no.. " required>
<br/>
<label for="uname"><font color="white">Res ID:</font></label>
    <br/><input type="text" name="reservationid" value=<?php echo $a;?>  readonly> 
<br/>
<label for="cid"><font color="white">Car ID</font></label>   
    <br/> <input type="number" id="cid" name="carid" value=<?php echo $g;?> readonly>
<br/>
    <font color="white"><h3>*Please swipe up your card in the counter.</h3></font>
    <br/>
    <input  class="btn btn-md" type="submit" value="Total">
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