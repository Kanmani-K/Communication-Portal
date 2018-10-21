<?php
session_start();
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
		#b1
		{
			width:200;
			height:50;
			font-family:verdana;
			color:green;
			background-color:lightblue;	
		}
		#b2
		{
			width:100;
			height:30;
			font-family:verdana;
			font-weight:bold;
			font-size:20;
			color:white;
			background-color:green;	
			float:right;
			padding:-14px 20px;
		}
		
	#label1{
			color:green;
		}
	</style>	

	
	<body><br>
	<div id="d1"><br>
		<label id="label1">Communication Portal for Farmer and Retailer</label>
			<a href="homefarmer.html"><button id="b2">Home</button></a>

		
	</div><br>
	<form method="post">
	<table cellpadding="30">
	<tr><td><label id="label1">Product Name</label></td>
	<td><select name="pdt"><option value="rice">Rice</option>
		<option value="milk">Milk</option>
		<option value="wheat">Wheat</option>
		<option value="pulses">Pulses</option></select><td></tr>
	<tr><td><label id="label1"><input type="checkbox" id="c1" name="check1" unchecked onchange="disableBox()">Check if Product variety available</label><br><br></td></tr>
	<tr><td><label id="label1" >Product Variety</label></td>
	<td><input type="text" id="pv" name="variety" disabled></td></tr>
	<tr><td><label id="label1">Quantity</label></td>
	<td><input type="text" name="quantity"></td></tr>
	<tr><td><label id="label1">Rate(per Kg/per litre)</label></td>
	<td><input type="text" name="rate"></td></tr>
	<tr><td><button id="b1" type="submit" name="submit">Submit</button></td>
	<td><button id="b1">Reset</button></td></tr>
	</table>
	</form>
	</body>

	<script>
		function disableBox()
		{
			var a=document.getElementById("c1").checked;
			if(a==true)			
				document.getElementById("pv").disabled=false;
			else{
				document.getElementById("pv").disabled=true;
				
			}
					
		}
	</script>
	

</html>
<?php
	if(isset($_POST['submit'])){
		$conn=new mysqli("localhost","root","","selab");
		echo("<script>alert('registered');</script>");
		$pdt=$_POST['pdt'];
		$quantity=$_POST['quantity'];
		$rate=$_POST['rate'];
		$fid=$_SESSION['id'];
		if(isset($_POST['check1'])){
			$variety=$_POST['variety'];
		}
		else{
			$variety=0;}
		$sql="INSERT INTO product VALUES(0,$fid,'$pdt','$variety',$quantity,$rate)";
		if($conn->query($sql)===true)
			echo("<script>alert('product registered');</script>");	
		$sql1="select pid from product  where fid= $fid";
		$result=$conn->query($sql1);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc()){
				$_SESSION['pid']=$row['pid'];
			}
		}

}
?>

