
<html>
<head>
<font face="Snap ITC" size="10" color="black"><b>Policies</b></font>

<style>
body {
    background-color: lightblue}
ul {
    list-style-type: none;
    margin: 1;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    font-family: "Comic Sans MS", cursive, sans-serif;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}#l1{
		font-size:30;
		color:white;
		padding: 10px 10px;
		font-weight:bold;
		font-family:papyrus;
	}
	#l2{
		font-size:30;
		color:white;
		padding: 10px 10px;
		font-weight:bold;
		font-family:papyrus;
	}
	#l3{
		font-size:30;
		color:white;
		padding: 10px 10px;
		font-weight:bold;
		font-family:papyrus;
	}
	#d2{
		margin:10px 20px;

	}


</style>
</head>
<body>
 <form method="post">

<ul>
  <li><a class="active" href="admin.php">HOME</a></li>
  <li><a href="login.php">Logout</a></li>
</ul>
<font face="Snap ITC" size="6" color="black"><b>
  <div class="container">
<div align="center">
    <label for="policy"><b>Policy</b></label>
    <input type="text" placeholder="Enter Policy" name="policy" required><br><br><br>
    <label for="policyDate"><b>policyDate</b></label>
    <input type="date" placeholder="Enter date" name="policyDate" required><br><br><br>
     
    <label for="policyExpiryDate"><b>policyExpiryDate</b></label>
    <input type="date" placeholder="Enter exp date" name="policyExpiryDate" required><br><br>
                
    <button type="submit" name="submit">submit</button>
    <label></b></font>
	</div>
  </div>
</form>
</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['submit']))
{
$link = mysqli_connect("localhost", "root", "", "selab");

// Check connection
/*if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}*/
	$policy=$_POST['policy'];
	$policyDate=$_POST['policyDate'];
	$policyExpiryDate=$_POST['policyExpiryDate'];
	

$sql="INSERT INTO policy VALUES(0,'$policy','$policyDate','$policyExpiryDate')";
//if($link->query($sql)===true)
if(mysqli_query($link, $sql)){
   echo "<script>alert 'Records added successfully' </script>";
}
 else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>