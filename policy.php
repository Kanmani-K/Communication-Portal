<html>
	<link href="body.css" rel="stylesheet">
	<style>
	table{
		font-family:BroadWay;
		font-size:40;
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
	<table cellpadding="40">
		<tr>
		<th>S.no</th>
		<th>Policy</th>
		<th>Date</th>
		<th>Expiry Date</th>
		</tr>
	<?php
		$conn=new mysqli("localhost","root","","selab");
		$count=1;
		$sql="select * from policy";
		$result=$conn->query($sql);
		if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
			$p=$row['policy'];
			$pdate=$row['policyDate'];
			$pedate=$row['policyExpiryDate'];
			echo "<tr>";
			echo "<td>".$count."</td>";
			echo "<td>".$p."</td>";
			echo "<td>".$pdate."</td>";
			echo "<td>".$pedate."</td>";	
			echo "</tr>";
			$count++;
	
		}}
	

	?>

	</table>

	</body>
</html>