<?php
	$con=mysqli_connect("localhost","root","","bhavna");
	$id=$_GET['id'];
	$query="select * from run where id=$id";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_row($result);
	
	?>

<!DOCTYPE html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto ">
	<br><br><div class="container">
	  <h2 class="text_cnter bg-primary text-white text-center">Stacked form</h2>
		<div class="col-6-lg">
		  <form action="update.php " method="post">
			<div class="form-group">
			  <label for="username">Username</label>
			  <input type="username" class="form-control" id="Username" placeholder="Enter Username" <?php echo $row[1]; ?> name="Username" required>
			</div>
			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="Password" placeholder="Enter password" <?php echo $row[2]; ?> name="Password"required>
			</div>
			<button type="submit" class="btn btn-primary w-100" id="done" name="done">Submit</button>
		  </form>
		</div>
	</div>		
</div>
</body>
</html>