<?php
session_start();
?>
<html>
	<link href="body.css" rel="stylesheet">
	<style>
	table{
		 font-family:verdana;
		font-size:28;
		color:lightblue;

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
	</style>
	<body>
	<br><br>
	<div id="d1"><br>
		<label id="label1">Communication Portal for Farmer and Retailer</label>
		<a href="homefarmer.html"><button id="b2">Home</button></a>
		 
	</div><br><br><br><br>
	
	<table cellpadding="45">
	<tr>
	<th>Product Detail</th>
	<th>Quantity</th>	
	<th>Order Date</th>
	<th>Retailer </th>
	</tr>
	<?php
	$conn=new mysqli("localhost","root","","selab");
	$fid =$_SESSION['id'];
	$sql="select pid,rid,quantity,orderDate from ordertable where fid=$fid";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
	{
		$rid=$row['rid'];
		$quantity=$row['quantity'];
		$date=$row['orderDate'];
		$pid=$row['pid'];
		$sql1="select name from product where pid=$pid";
		$result1=$conn->query($sql1);
		$row1=$result1->fetch_assoc();
		$pdtname=$row1['name'];
		$sql2="select name from retailer where rid=$rid";
		$result2=$conn->query($sql2);
		$row2=$result2->fetch_assoc();
		$retailername=$row2['name'];
		echo "<tr>";
		echo "<td>".$pdtname."</td>";
		echo "<td>".$quantity."</td>";
		echo "<td>".$date."</td>";
		echo "<td>".$retailername."</td>";
		echo "</tr>";
	}
	}
	else 
		echo "<script>alert('No orders are available')</script>";
?>
</table>
</body>
</html>
