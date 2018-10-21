
<html>
<head>
<style>
body{
    margin=0px;
    border=0px;
}
table{
	font-family:verdana;
	font-size:23;
	//font-face:"monotype corsiva";

}
label1{
	font-family:verdana;
	font-size:20;
	//font-face:"monotype corsiva";

}
ul {
font size=10;
font face="monotype corsiva";
}
#header{
	width:100%;
        height:120px;
        background:black;
        color:white;
}
#side{
	width:300px;
        height:600px;
        background:white;
        float:left;
}
#data{
     height:700px;
     background:white;
}
ul li{
    padding:20px;
    border-bottom: 2px solid gray;
}
ul li:hover{
     background:pink;
     color:red;
}
</style>
</head>
<body>
<center>
<form action="order.php" method="post">
<div id="header">
<center><font size=10 face="monotype corsiva" color="white"><h1>order list</h1></center>
</div>
<div id="data">

 <table width='70%' height='25%' border=2>
        <tr bgcolor='#CCCCCC'>
		<th>S no</th>
	     <th>Farmer</th>
            <th>Retailer</th>
            <th>product</th>
           <th>Order date</th>
            <th>Quantity</th>
     </tr>
        <?php  
	$count=1;
	$conn=new mysqli("localhost","root","","selab");
	$sql="select pid,rid,quantity,orderDate,fid from ordertable";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
	{
		$fid=$row['fid'];
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
		$sql3="select name from farmer where fid=$fid";
		$result3=$conn->query($sql3);
		$row3=$result3->fetch_assoc();
		$farmername=$row3['name'];

		echo "<tr>";
		echo "<td>".$count."</td>";
		echo "<td>".$farmername."</td>";
		echo "<td>".$retailername."</td>";
		echo "<td>".$pdtname."</td>";
		echo "<td>".$date."</td>";
		echo "<td>".$quantity."</td>";
		echo "</tr>";
		$count++;
	}
	}
	else 
		echo "<script>alert('No orders are available')</script>";

        ?>

</div>
    </table>
</form>
</center>
</body>
</html>