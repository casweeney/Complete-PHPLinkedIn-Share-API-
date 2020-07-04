<?php

	require "init.php";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Share with Linkedin API v2</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<style type="text/css">
			body, html {
				height: 100%;
			}

			.bg {
				background-image: url('images/bg.jpg');
				height: 100%;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		</style>
	</head>
	<body class="bg">
		<div class="container">
			<br><br><br>
			<div class="row">
				<div class="col-md-6 offset-3" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
					<div class="card-header">
						<h1>Share on Linkedin</h1>
						<p style="font-style: italic;"> Using Linkedin API v2</p>
					</div>
					<hr>
					<div class="card-body">
						<a href="<?php echo $linkedin->getAuthUrl(); ?>" class="btn btn-primary btn-block">Sign In with LinkedIn</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>