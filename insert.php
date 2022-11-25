<?php
if(isset($_POST['done'])){
	$name = $_POST['name'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$stop = $_POST['stop'];
	$shift = $_POST['shift'];
	$mobile = $_POST['mobile'];
	$pass = $_pass['pass'];
	$con=mysqli_connect("localhost","root","","crud");
	$query = "SELECT * FROM `mytab` VALUES ('$name','$course','$year','$stop','$shift','$mobile');";
	$result=mysqli_query($con,$query);
	if($result==true)
{
  
  // header("Location:submit.php");
   echo "no con";
}
else
{
	//echo "<p style='border:1px solid red'; padding-top:100px '>data is successfully insert</p>";
	header("Location:submit.php");
}
}
?>
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
<style>
	.nav-item:hover{
  background-color:#f8bf59;
}
</style>
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
								<a class="nav-link text-light" href="contect.html">Contect</a>
							 </li> 
							 <li class="nav-item">
								<a class="nav-link text-light" href="insert.php"> sign up</a>
							 </li> 
								  
						</ul>
					</div>						
				</nav>	
			</div>
		</dIV>



<div class="col-lg-6 m-auto ">
	<br><br><div class="container">
	  <h2 class="text_cnter bg-dark text-white text-center">_____</h2>
		<div class="col-6-lg">
		  <form method="post">
			<div class="input-group mt-5 mb-3">
				<div class="input-group-prepend form-group">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
				</div>
				<input type="text" class="form-control" id="name" placeholder=" Enter Usename"  name="name" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-graduation-cap" aria-hidden="true"></i></i></span>
				</div>
				<input type="text" class="form-control" id="course" placeholder="Cource" name="course" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-graduation-cap" aria-hidden="true"></i></i></span>
				</div>
				<input type="text" class="form-control" id="year" placeholder="year" name="year" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				</div>
				<input type="text" class="form-control" id="stop" placeholder=" Enter Your Stop" name="stop" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
				</div>
				<input type="time" class="form-control"  id="shift" placeholder="your time" name="shift" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
				</div>
				<input type="number" class="form-control"  id="mobile" placeholder="Your Number" name="mobile" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
				</div>
				<input type="number" class="form-control"  id="mobile" placeholder="create your password " name="pasword" required>
			</div>
				<div class="button w-100 pb-5 pt-4" style="display:flex; ">
					<button type="Submit" class="btn btn-success ml-1 w-50 bg-dark" id="done" name="done">Submit</button>
					<button type="reset" class="btn btn-success ml-1 w-50 bg-dark" >Reset Form</button>
				</div>	
		</form>
		</div>
	</div>		
</div>
</body>
</html>

