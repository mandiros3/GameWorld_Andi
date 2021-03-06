

<!-- This is the project: Gameworld.

authors: Andi Milhomme, Sybunlong Heng, Sereyrath Nov

-->
<?php
session_start(); 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>GameWorld</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">

		<!--  custom CSS here -->
		<link rel="stylesheet" href="../../css/main.css">

		<!--Javascript responsible for responsivness -->

		<script src="../../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>

	<!-- IMPORTANT:  PUT ALL JAVASCRIPT FILES AT THE BOTTOM -->

	<body>

		<div class="wrapper">
			<?php require("../../php/includes/navbar.php"); ?>

			<div class="container">
				<br>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 sEngine">
						<form role="form" method='post' action='login.php'>
							<h2>Please Log In<small>.</small></h2>
							<hr class="colorgraph">

							<div class="form-group">
								<input type="text" name="UserName" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3">
							</div>
							<div class="form-group">
								<input type="password" name="Password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
							</div>
							<hr class="colorgraph">
							<input type='submit' name='login' value='Log In' class="btn btn-primary btn-block btn-lg" tabindex="7">
						</form>
						<br>
				<p style= "color: #FF0000">Not registered yet? <a href='register.php'>Register Here</a> </p>
		
					</div>
					
					
				</div>
				
				
			</div>
				</div>
					</div>

			<hr>

			<footer>
				<p>
					&copy; GameWorld 2014
				</p>
			</footer>

			<!--Javascript dependencies and other libraries such as jquery UI-->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
			<script>
				window.jQuery || document.write('<script src="../../js/vendor/jquery-1.10.1.min.js"><\/script>');
			</script>
			<script src="../../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

			<!--Javascript responsible for responsivness -->
			<script src="../../js/vendor/bootstrap.min.js"></script>
			<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

			<!-- custom javascript-->
			<script src="../../js/main.js"></script>

	</body>
</html>

<!-- //<?php require("../../php/includes/signin.php"); ?> -->

<?php 

$link = mysql_connect("localhost","snov","sn4mlc5");
mysql_select_db("snov");

if(isset($_POST['login'])){

  $Password = $_POST['Password'];
  $UserName = $_POST['UserName'];

  $check_user = "select * from registered_users where Password='$Password' AND UserName='$UserName'";

  $run = mysql_query($check_user);

  if(mysql_num_rows($run)>0) {

    $_SESSION['UserName']=$UserName;
    
    echo "<script>window.open('../../src/register/welcome.php','_self')</script>";
  }
  else {
    echo "<script>alert('UserName or Password is incorrect')</script>";
  }
}

?>