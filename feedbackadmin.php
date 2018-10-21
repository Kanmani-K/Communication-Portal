<?php
include_once("conn.php");
$result = mysqli_query($mysqli, "SELECT * FROM feedback"); 
?>
<html>
<head>
<style>
body{
    margin=0px;
    border=0px;
}
label{
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
<form action="feedback.php" method="post">
<div id="header">
<center><font size=10 face="monotype corsiva" color="white"><h1>FeedBack page</h1></center>
</div>
<div id="data">

 <table width='70%' height='25%' border=2>
        <tr bgcolor='#CCCCCC'>
            <th><label>Feedback id</label></th>
           <th><label>Userid</label></th>
            <th><label>feedback</label></th>
     </tr>
        <?php
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td><label1>".$res['feedbackid']."</label1></td>";
            echo "<td><label1>".$res['userid']."</label1></td>";
            echo "<td><label1>".$res['fb']."</label1></td>";    
            //echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>|<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>

</div>
    </table>
</form>
</center>
</body>
</html>