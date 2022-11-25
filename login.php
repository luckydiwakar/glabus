<?php include('server.php') ?>
<!DOCTYPE html>
<head>
  <title>Insert data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div class="col-lg-4 m-auto pt-5 ">
	<br><br><div class="container">
	  <h2 class="text_cnter bg-primary text-white text-center p-2">Login </h2>
		<div class="col-6-lg">
		  <form method="post" action="login.php">
		  <?php include('errors.php'); ?>
			<div class="input-group mt-5 mb-3">
				<div class="input-group-prepend form-group">
					<span class="input-group-text text-light bg-primary"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
				</div>
				<input type="text" class="form-control" placeholder=" Enter Usename"  name="username" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text text-light bg-primary"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="create your password " name="password" required>
			</div>
				<div class="button w-100 pb-5 pt-4" style="display:flex; ">
					<button type="Submit" class="btn btn-success ml-1 w-50 bg-primary"  name="login_user">login</button>
					<button type="reset" class="btn btn-success ml-1 w-50 bg-primary" >Reset Form</button>
				</div>	
				<p>
  		Not yet a member? <a href="login.php">Admin Login</a>
  	</p>
		</form>
		</div>
	</div>		
</div>
</div> 
</body>