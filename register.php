<?php
	if(isset($_POST['submit']))
 {
		
		$conn=new mysqli("localhost","root","","selab");
	
	echo"<script>alert('connected');</script>  " ;


	$name =  $_POST['name'];
	$mailid = $_POST['mailid'];
	$pswd = $_POST['pswd'];
	$address =$_POST['address'];
	$phoneno = $_POST['phoneno'];
	$radio=$_POST['type_of_user'];

	if($radio=="Farmer")
	{
	

		$result = "INSERT INTO farmer VALUES(0,'$name','$mailid','$pswd','$address','$phoneno')";
		
		if($conn->query($result)===true) 
			{
			echo"<script>alert('Successfully registered');</script>  " ;
			
		}
	}
	if($radio=="Retailer")
	{
		$result = "INSERT INTO retailer VALUES(0,'$name','$mailid','$pswd','$address','$phoneno')";
		if($conn->query($result)===true) {
			echo"<script>alert('Successfully registered');</script>  " ;
		}
	}
	}
?>
<html>
<head><title>Registration Form</title></head>
<style>


h1
{
	font-family:verdana;
	font-size:28;
	color:Blue;
	
}
p
{
	font-family:courier;
	size:22;
	color:blue;

}
/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color:lightblue;
  outline: none;
 

}

label{
	font-family:papyrus;
	color:black;
	size:26;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: red;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;

}

.cancelbtn, .signupbtn,.checkbtn {
  
  width: 33%;
  background-color:pink;

}

.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
.bar{
 	background-color:black;
	

}
#img1
{
 float:right;
border-radius:50%;
}
</style>
<body>
<link rel="stylesheet" href="bodystyle.css">
		<br>
		<br>
		<div class="bar">
<br>
		<h1 id="h">COMMUNICATION PORTAL FOR FARMER AND RETAILER
		<a href="home.html">	 <img src="home.jpg" id="img1" width="50" height="50" ></h1></a><br>
		</div>

		<br><br>
	
		
<form method="post">

  <div class="container">
    <h1 id="sp">Sign Up</h1>
    <h2>Please fill in this form to create an account</h2>

    <hr>
 </div>
    <label><b>Type of user<b></label>
    <input type="radio" name="type_of_user" value="Farmer"><b>Farmer<b> &nbsp &nbsp
    <input type="radio" name="type_of_user" value="Retailer"><b>Retailer<b><br><br><br>


    <label><b>User_Name<b></label>
     <input type="text" name="name" placeholder="Enter your name" style="Background-color:lightblue;" required oninput="checkName()">
   <br><br>   
  <label><b>Phone_no</b></label>
    <input type="text" name="phoneno" placeholder="Enter you contact number" style="background-color:lightblue;" required>
 
    <label><b>Email</b></label>
    <input type="text" name="mailid" placeholder="Enter Email" style="background-color:lightblue;" required>

    <label><b>Password</b></label>
    <input  type="password" name="pswd" id="password" placeholder="Enter Password"style="background-color:lightblue;" required>

    <label><b>Confirm Password</b></label>
    <input type="password" name="confirm_password" id="pswd2" placeholder="Re-Enter Password"style="background-color:lightblue;" required onchange="pswdCheck()";>
  <label><b>Address</b></label>
  <textarea name="address" rows="10" cols="50" placeholder="Enter you address" style="background-color:lightblue;" required></textarea>
 	
	<br><br><br>
	
    <label>
      <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
  <a href="home.html">  <button type="button" class="cancelbtn">Cancel</button> </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
         
         
      
     <a href="login.php">    <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
 
</form>
<script>
 function pswdCheck()
{
	var x=document.getElementById("password");
	var y=document.getElementById("pswd2");
	if(x.value==y.value)
		alert('Password Matched');
	else
	{
		alert('Password Mismatched..... Re-Enter Password');
		x.value="";
		y.value="";
	
	}

}

</script>
</body>
</html>
