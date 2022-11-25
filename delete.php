	<?php
	$con=mysqli_connect("localhost","root","","bhavna");
	$id=$_GET['id'];
	echo $id;
	$query="delete from run where id=$id";
	$res=mysqli_query($con,$query);
	if($res==true)
	{
		//echo "<p style='border:1px solid green;'>data is successfully deleted</p>";
		header("Location:display.php");
	}
	else
	{
		echo "<p style='border:1px solid red;'>failed</p>";
	}
	?>