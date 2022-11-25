<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<head>
  <title>index </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Indie+Flower&family=The+Nautigal&display=swap" rel="stylesheet">
</head>
</head>
<body>

<div class="container-fluid" style="background-color:#000000" >
<div class="container" >
	<nav class="navbar navbar-expand-md navbar-dark">
				<div class="text-light w-50">
					<span>GLA</span><span style="color:#ff4c4c">BUS</span><span>.com</span>				
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
					<div class="collapse navbar-collapse w-50 nav-a" id="collapsibleNavbar">
						<ul class="navbar-nav p-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">
							<li class="nav-item">
								<a class="nav-link text-light" href="gla.html"> <span>Home</span></a>
							</li>
						<li class="nav-item">
						<a class="nav-link text-light " href="pay.html">Pay Fee</a>
						</li> 
							 <li class="nav-item">
								<a class="nav-link text-light" href="contect.html">Contact</a>
							 </li>
							 <li class="nav-item text-right">
								<a class="nav-link text-light" href="contect.html">Profile</a>
							 </li> 	 	
							 <li class="nav-item text-right">
								<p> <a class="nav-link " href="index1.php?logout='1'" style="color:red;">logout</a> </p>
							 </li> 	  
						</ul>
					</div>						
				</nav>	
			</div>
		</dIV>

<div class="header">
	<h2>Home Page</h2>
</div>
	Welcome to my project page	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>

</body>
</html>