<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:index.html");
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
<style>


body{
    background:#eee;

}
.widget-author {
  margin-bottom: 58px;
}
.author-card {
  position: relative;
  padding-bottom: 48px;
  background-color: #fff;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
}
.author-card .author-card-cover {
  position: relative;
  width: 100%;
  height: 100px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.author-card .author-card-cover::after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
  opacity: 0.5;
}
.author-card .author-card-cover > .btn {
  position: absolute;
  top: 12px;
  right: 12px;
  padding: 0 10px;
}
.author-card .author-card-profile {
  display: table;
  position: relative;
  margin-top: -22px;
  padding-right: 15px;
  padding-bottom: 16px;
  padding-left: 20px;
  z-index: 5;
}
.author-card .author-card-profile .author-card-avatar, .author-card .author-card-profile .author-card-details {
  display: table-cell;
  vertical-align: middle;
}
.author-card .author-card-profile .author-card-avatar {
  width: 85px;
  border-radius: 50%;
  box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
  overflow: hidden;
}
.author-card .author-card-profile .author-card-avatar > img {
  display: block;
  width: 100%;
}
.author-card .author-card-profile .author-card-details {
  padding-top: 20px;
  padding-left: 15px;
}
.author-card .author-card-profile .author-card-name {
  margin-bottom: 2px;
  font-size: 14px;
  font-weight: bold;
}
.author-card .author-card-profile .author-card-position {
  display: block;
  color: #8c8c8c;
  font-size: 12px;
  font-weight: 600;
}
.author-card .author-card-info {
  margin-bottom: 0;
  padding: 0 25px;
  font-size: 13px;
}
.author-card .author-card-social-bar-wrap {
  position: absolute;
  bottom: -18px;
  left: 0;
  width: 100%;
}
.author-card .author-card-social-bar-wrap .author-card-social-bar {
  display: table;
  margin: auto;
  background-color: #fff;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);
}
.btn-style-1.btn-white {
    background-color: #fff;
}
.list-group-item i {
    display: inline-block;
    margin-top: -1px;
    margin-right: 8px;
    font-size: 1.2em;
    vertical-align: middle;
}
.mr-1, .mx-1 {
    margin-right: .25rem !important;
}

.list-group-item.active:not(.disabled) {
    border-color: #e7e7e7;
    background: #fff;
    color: #ac32e4;
    cursor: default;
    pointer-events: none;
}
.list-group-flush:last-child .list-group-item:last-child {
    border-bottom: 0;
}

.list-group-flush .list-group-item {
    border-right: 0 !important;
    border-left: 0 !important;
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem;
}
a.list-group-item, .list-group-item-action {
    color: #404040;
    font-weight: 600;
}
.list-group-item {
    padding-top: 16px;
    padding-bottom: 16px;
    -webkit-transition: all .3s;
    transition: all .3s;
    border: 1px solid #e7e7e7 !important;
    border-radius: 0 !important;
    color: #404040;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    text-decoration: none;
}
.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.125);
}

.product-card {
  position: relative;
  max-width: 380px;
  padding-top: 12px;
  padding-bottom: 43px;
  transition: all 0.35s;
  border: 1px solid #e7e7e7;
}
.product-card .product-head {
  padding: 0 15px 8px;
}
.product-card .product-head .badge {
  margin: 0;
}
.product-card .product-thumb {
  display: block;
}
.product-card .product-thumb > img {
  display: block;
  width: 100%;
}
.product-card .product-card-body {
  padding: 0 20px;
  text-align: center;
}
.product-card .product-meta {
  display: block;
  padding: 12px 0 2px;
  transition: color 0.25s;
  color: rgba(140, 140, 140, .75);
  font-size: 12px;
  font-weight: 600;
  text-decoration: none;
}
.product-card .product-meta:hover {
  color: #8c8c8c;
}
.product-card .product-title {
  margin-bottom: 8px;
  font-size: 16px;
  font-weight: bold;
}
.product-card .product-title > a {
  transition: color 0.3s;
  color: #343b43;
  text-decoration: none;
}
.product-card .product-title > a:hover {
  color: #ac32e4;
}
.product-card .product-price {
  display: block;
  color: #404040;
  font-family: 'Montserrat', sans-serif;
  font-weight: normal;
}
.product-card .product-price > del {
  margin-right: 6px;
  color: rgba(140, 140, 140, .75);
}
.product-card .product-buttons-wrap {
  position: absolute;
  bottom: -20px;
  left: 0;
  width: 100%;
}
.product-card .product-buttons {
  display: table;
  margin: auto;
  background-color: #fff;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);
}
.product-card .product-button {
  display: table-cell;
  position: relative;
  width: 50px;
  height: 40px;
  border-right: 1px solid rgba(231, 231, 231, .6);
}
.product-card .product-button:last-child {
  border-right: 0;
}
.product-card .product-button > a {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all 0.3s;
  color: #404040;
  font-size: 16px;
  line-height: 40px;
  text-align: center;
  text-decoration: none;

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
								<a class="nav-link text-light" href="index.html"> <span>Home</span></a>
							</li>
						<li class="nav-item">
						<a class="nav-link text-light " href="pay.html">Pay Fee</a>
						</li> 
							 <li class="nav-item">
								<a class="nav-link text-light" href="contect.html">Contact</a>
							 </li> 
							 <li class="nav-item">
<a class="nav-link" href="index.html" style="display: inline-block; margin-left: :-5px; color:red;">logout</a>
							 </li> 
								  
						</ul>
					</div>						
				</nav>	
			</div>
		</dIV>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container justify-content-center mt-5">
            <div class="row">
                <div class="col-lg-4 pb-5">
                    <!-- Account Sidebar-->
                    <div class="author-card pb-3">
                        <div class="author-card-cover" style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);"></div>
                        <div class="author-card-profile">
                            <div class="author-card-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Daniel Adams">
                            </div>
                            <div class="author-card-details">
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
    	<p><strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>  <span class="author-card-position" style="margin-top:-15px;">Joined February 06, 2017</span>
                            </div>
                        </div>
                    </div>

                    <div class="wizard">
                        <nav class="list-group list-group-flush">
                            <a class="list-group-item active" href="#">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
				
                                    </div><span class="badge badge-secondary">6</span>
                                </div>
                            </a>

							<span class="list-group-item" href="#">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="fa fa-map-marker text-muted"></i>
                                        <div class="d-inline-block font-weight-medium text-uppercase">My Wishlist</div>
                                    </div>
                                </div>
							</span>
                           
							
							<span class="list-group-item" href="#">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="fa fa-heart mr-1 text-muted"></i>
                                        <div class="d-inline-block font-weight-medium text-uppercase">My Wishlist</div>
                                    </div>
                                </div>
							</span>
                            <span class="list-group-item" href="https://www.bootdey.com/snippets/view/bs4-account-tickets" target="__blank">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="fa fa-tag mr-1 text-muted"></i>
                                        <div class="d-inline-block font-weight-medium text-uppercase">My Tickets</div>
                                    </div><
                                </div>
							</span>
                        </nav>
                    </div>
                </div>
                <div>
            </div>
        </div>
</body>
</html>