<?php
session_start();
?>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

<body>

<h2>Login Form</h2>
 <form method="post">

  <div class="imgcontainer">
    <img src="3_trading_up.png" alt="Avatar" class="avatar">
  </div>

  <input type="radio" name="type" value="farmer"> Farmer
  <input type="radio" name="type" value="retailer">Retailer
  <input type="radio" name="type" value="admin"> Admin

</script>
  <div class="container">
    <label for="userid"><b>Userid</b></label>
    <input type="text" placeholder="Enter mail id" name="userid" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
<input type="Reset" value="Reset"/>
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$conn=new mysqli("localhost","root","","selab");
	$radio=$_POST['type'];
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	$msg="";
	if($radio=="farmer")
	{
	$result = $conn->query("SELECT * FROM farmer WHERE mailid='$userid' and pswd='$password'");
	if($result->num_rows>0)
	{
		/*$result1=$conn->query("SELECT fid FROM farmer WHERE mailid='$userid' and pswd='$password'");
		if($result1->num_rows>0)
		{*/
			while($row=$result->fetch_assoc())
			{
				$_SESSION['id']=$row['fid'];
				header("location: homefarmer.html");
			}
	}
	else {echo"<script>alert ('wrong password or userid or type')</script>";}
	}

	if($radio=="retailer")
	{
	$result1 = $conn->query("SELECT * FROM retailer WHERE mailid='$userid' and pswd='$password'");
	if($result1->num_rows>0)
	{
	/*	$result3=$conn->query("SELECT rid FROM retailer WHERE mailid='$userid' and pswd='$password'");
		if($result3->num_rows>0)
		{*/
		while($row=$result1->fetch_assoc())
			{
			echo ("<script>alert($row)</script>");
				$_SESSION['id']=$row['rid'];
				header("location: Retailer.php");
			}


		
	}else{echo"<script>alert ('wrong password or userid or type')</script>";}

	}
        if($radio=="admin")
	{
	if($userid=="admin")	
			header("location:admin.php");
	else
		echo"<script>alert ('wrong password or userid or type')</script>";
	}
}		
?>