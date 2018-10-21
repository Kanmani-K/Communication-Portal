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
		//	background-color:lightblue;
		}
		input[type="date"],select
		{
			width:500;
			height:50;
			font-size:28;
			font-family:courier;	
		}
		.button
		{
			width:200;
			height:50;
			font-family:verdana;
			color:green;
			background-color:lightblue;	
		}
		#label1{
			color:green;
		}
		table{

			font-family:verdana;
			font-size:20;
		}
	</style>	

	
	<body><br>
	<div id="d1"><br>
		<label id="label1">Communication Portal for Farmer and Retailer</label>
		<a href="home.html"><button>Logout</button></a>
		<a href="Retailer.php"><button>Home</button></a>
	</div><br>
	<form action="" method="post">
	<table cellpadding="30">
	<tr><td><label id="label1">Product Name</label></td>
	<td><select name="pdt"><option name="pdt" value="rice">Rice</option>
		<option value="milk" >Milk</option>
		<option value="wheat" >Wheat</option>
		<option value="pulses">Pulses</option></select></td>
		<td><button id="button" type="submit" name="submit">Search</button><br></td></tr>
	<tr><td><lable id="label1">Product Detail</label></td></form>
	 <table width='70%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>farmer id</td>
            
            <td>quantity</td>
	    <td>rate</td>
        </tr>
        <?php
	if(isset($_POST['submit'])){
	$conn=new mysqli("localhost","root","","selab");
	$pdt =$_POST['pdt'];
	$sql="select fid,quantity,rate from product where name='$pdt'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$row['fid']."</td>";
		echo "<td>".$row['quantity']."</td>";
		echo "<td>".$row['rate']."</td>";
		echo "</tr>";
	}
	}
	else
	{
		echo"<script>alert('No More Products');</script>";
	}}
    ?>
</div></td></tr>	
		<tr><td><label id="label1" >Product Name</label></td>
	<td><input type="text" id="pv" name="pname" ></td></tr>
	<tr><td><label id="label1" >Farmer Id</label></td>
	<td><input type="text" id="pv" name="farmerid" ></td></tr>
	<tr><td><label id="label1">Orderdate</label></td>
	<td><input type="date" name="orderdate" dateformat="y d m"></td></tr>
	<tr><td><label id="label1">Quantity</label></td>
	<td><input type="text" name="quantity" ></td></tr>
	<tr><td><button type="submit" name="submit1">Order Request</button></td>
	<td><button>Cancel</button></td></tr>
	</tabel></form>
	</body>

</html>
<?php
	if(isset($_POST['submit1']))
	{
		$conn=new mysqli("localhost","root","","selab");
		$pdt=$_POST['pname'];
		$rid=$_SESSION['id'];
		$fid=$_POST['farmerid'];
		$date=$_POST['orderdate'];
		$quantity=$_POST['quantity'];
		$sql="select pid from product where name='$pdt'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				$pid=$row['pid'];
			}
		}
		$sql2="insert into ordertable values(0,$fid,$rid,$pid,'$date',$quantity)";
		if($conn->query($sql2)===true)
			echo"<script>alert('entered into the table');</script>";

	}
?>