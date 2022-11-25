	<?php
	$id=$_POST['id'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	
	
	echo "id : ".$id."<br>";
	echo "Username : ".$Username."<br>";
	echo "Password : ".$Password."<br>";
	
	
	$con=mysqli_connect("localhost","root","","bhavna");	
	$up_query="update run set Username='$Username',Password='$Password' where id=$id";
	$result=mysqli_query($con,$up_query);
	if($result==true)
	{
		//echo "<p style='border:1px solid green;'>data is successfully updated</p>";
		header("Location:display.php");
	}
	else
	{
		echo "<p style='border:1px solid red;'>failed</p>";
	}
	?>