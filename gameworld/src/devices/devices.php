<!-- This is the project: Gameworld.

authors: Andi Milhomme, Sybunlong Heng, Sereyrath Nove

-->

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


	</head>
	<body>

		<div class="wrapper">

			<?php
			require ("../../php/includes/navbar.php");
			?>

			<!--content starts here-->
			<br>
			<div class="container">

				<section class="row">
					<div class="col-lg-12">
						<h1 style="text-align:center;" id="header">Select your favorite device</h1>
						<br>

					</div>

				</section>

				<section class="row devices-list " style="text-align:center; padding-bottom: 250px;">
					<div class="col-lg-4">

						<div class="panel panel-danger" style="height:187px; width:360px;">
							<div class="panel-heading">
								<h3 class="panel-title"><span class="label label-danger">Microsoft </span></h3>
							</div>
							<div class="panel-body">
								<ul style="list-style-type: none;">

									<li>
										<a href="consoles/xbox.php">Xbox One</a>
									</li>
									<li class="disabled">
										<a class="disabled" href="#">Xbox 360</a>
									</li>
									<li>
										<a class="disabled" href="">Xbox</a>
									</li>

								</ul>
							</div>
						</div>

					</div>
					<div class="col-lg-4">
						<div class="panel panel-success" >
							<div class="panel-heading">
								<h3 class="panel-title"><span class="label label-success">Sony </span></h3>
							</div>
							<div class="panel-body">
								<ul style="list-style-type: none;">

									<li>
										<a href="consoles/ps4.php">PlayStation4</a>
									</li>
									<li>
										<a class="disabled" href="">PlayStation3</a>
									</li>
									<li>
										<a class="disabled" href="">PlayStation2</a>
									</li>
									<li>
										<a class="disabled" href="">PlayStation1</a>
									</li>

									<br>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-info" style="height:187px; width:360px;">
							<div class="panel-heading">
								<h3 class="panel-title"><span class="label label-info">Nintendo </span></h3>
							</div>
							<div class="panel-body">
								<ul style="list-style-type: none;">

									<li>
										<a href="consoles/wiu.php">Wii U</a>
									</li>
									<li>
										<a class="disabled" href="">Wii</a>
									</li>
									<li>
										<a class="disabled" href="">SNES</a>
									</li>
									<li>
										<a class="disabled" href="">NES</a>

									</li>

								</ul>
							</div>
						</div>
					</div>

				</section>

			</div>

			<hr>

			<footer>
				<p>
					&copy; GameWorld 2014
				</p>
			</footer>

		</div>
		<!--wrapper-->
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
