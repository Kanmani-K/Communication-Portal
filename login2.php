<html>
<body>
	<form method="post">
	<center>
	UserName:<input name="fn" type="email">
	Password:<input name="pswd">
	<input type="submit" value="submit" name="submit">Submit	
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$conn=new mysqli("localhost","root","root","weblab");
		$username=$_POST['fn'];
		$pswd=$_POST['pswd'];
		$sql="select * from register where email='$username' and pswd='$pwsd'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
 			echo"<script>alert('Valid user')</script>";
			header("location:homefarmer.html");		
		}
		else
			echo"<script>alert('Not a valid user')</script>";			
	}
?>