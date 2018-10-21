<?php
include_once("conn.php");
$result = mysqli_query($mysqli, "SELECT * FROM oder"); 
?>
<html>
<head>
<style>
body{
    margin=0px;
    border=0px;
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
<form action="viewoder.php" method="post">
<div id="header">
<br><br>
<center><font face="monotype corsiva" color="white"><h1>Admin page</h1></center>
</div>
<div id="side">
<ul>
 <li><h4><a href="vieworder.php">View orders</a></h4></li>
 <li><h4><a href="viewuser.php"> View Users</a></h4></li>
 <li><h4><a href="removeprovider.php"> Remove Provider</a></h4></li>
 <li><h4><a href="removeorder.php"> Remove order</a></h4></li>
 <li><h4><a href="feedback.php"> view feedback</a></h4></li>
<li><h4><a href="apage.php"> Home</a></h4></li>
</ui>
</div>
<div id="data">
 <table width='70%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Order id</td>
            <td>Product name</td>
            <td>Ordered date</td>
            <td>Last date to deliver</td>
            <td>quantity</td>
        </tr>
        <?php
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['order no']."</td>";
            echo "<td>".$res['product name']."</td>";
            echo "<td>".$res['Odered date']."</td>";    
            echo "<td>".$res['Last date to deliver']."</td>"; 
            echo "<td>".$res['Quantity']."</td>";    
            //echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>|<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
</div>
    </table>
</form>
</center>
</body>
</html>