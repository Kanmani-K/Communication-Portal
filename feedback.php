<?php
	if(isset($_POST['submit']))
 {
		
		$conn=new mysqli("localhost","root","","selab");
	
	echo"<script>alert('connected');</script>  " ;


	$username =  $_POST['username'];
	$feedback = $_POST['feedback'];
	
	

		$result = "INSERT INTO feedback VALUES(0,'$username','$feedback')";
		
		if($conn->query($result)===true) 
			{
			echo"<script>alert('Successfully registered');</script>  " ;
			
		}
}
?>
<html>
	<link href="body.css" rel="stylesheet">
	<style>
		
		input[type="text"],select
		{
			width:500;
			height:50;
			font-size:28;
			font-family:courier;	
			background-color:lightblue;
		
		}
		textarea{
			font-family:cooper;
			font-size:34;
			font-weight:bold;
			background-color:lightblue;
	
		}
		textarea:hover{
			background-color:lightred;
		}
		#label2{
			font-family:cooper;
			font-size:34;
		}
		#b1{
			color:black;
			background-color:lightpink;
			width:300px;
			height:50px;
			font-family:cooper;
			font-weight:bold;
			font-size:30;

		}
	</style>
		<body>
	<br><br>
	<div id="d1"><br>
		<label id="label1">Communication Portal for Farmer and Retailer</label>
			<a href="homefarmer.html"><button id="b2">Home</button></a>		 
	</div>
	<form method="post" >
	<table><tr><td><label id="label2">Username</label></td>
	<td><input type="text" name="username" </td></tr>
	<tr><td><label id="label2">Email</label></td>
	<td><input type="text" name="email"</td></tr>
	<tr><td><label id="label2">Enter your Feedback here</label></td><br><br>
	<td><textarea name="feedback" rows=10 cols=40></textarea></td></tr><br><br><br></table>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="b1" type="submit" name="submit">Submit</button>
	</form>
	</body>
</html>