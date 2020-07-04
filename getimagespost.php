<?php
	require "init.php";
	$profile = $linkedin->getPerson($_SESSION['linkedInAccessToken']);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Share with Linkedin API v2</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<style type="text/css">
			body, html {
				/*height: 100%;*/
			}

			.bg {
				background-image: url('images/bg.jpg');
				/*height: 100%;*/
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				padding-bottom: 5%;
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
						<p style="font-style: italic;"> Profile</p>
					</div>
					<hr>
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<img src="<?php echo $profile->profilePicture->{"displayImage~"}->elements[0]->identifiers[0]->identifier; ?>" class="img-thumbnail">
							</div>
							<div class="col-9">
								<div class="row">
									<dt class="col-12">
										Profile ID
									</dt>
									<dd class="col-12">
										<?php echo $profile->id ?>
									</dd>

									<dt class="col-12">
	                                    Profile Name
	                                </dt>
	                                <dd class="col-12">
	                                    <?php echo $profile->firstName->localized->en_US ?> <?php echo $profile->lastName->localized->en_US ?>
	                                </dd>
								</div>
							</div>
						</div>
						<hr>
						<h5>Share Multiple Images Post</h5>
	                    <form action="postimagespost.php" enctype="multipart/form-data" required="required" method="post">
	                    	<input type="hidden" name="profile" value="<?php echo $profile->id; ?>">
	                        <textarea name="content" id="content" cols="30" rows="10" style="resize: none;" placeholder="What's on your mind?" class="form-control"></textarea>
	                        <br>
	                        <label for="">Image</label>
	                        <input type="file" id="images" required="required" class="form-control" multiple name="image[]">
	                        <br>
	                        <div id="image_details">
	                            
	                        </div>
	                        <label for="">Privacy</label>
	                        <select class="form-control" name="privacy" id="privacy">
	                        	<option value="PUBLIC">Public</option>
	                        	<option value="CONNECTIONS">Connections Only</option>
	                        </select>
	                        <br>
	                        <input type="submit" class="btn btn-danger btn-block" value="Proceed">
	                    </form>
					</div>
				</div>
			</div>
		</div>

		<script>
	        $('input#images').change(function(){
	            var files = $(this)[0].files;
	            var image_details = $("#image_details");

	            $(files).each(function(key, file) {
	                image_details.append('<label for="">Image ' + parseInt(key +1) +' Title</label><input type="text" required="required" class="form-control" name="image_title[]"><br><label for="">Image ' + parseInt(key +1) +' Description</label><input type="text" required="required" class="form-control" name="image_desc[]"><br>');
	            });
	        });
	    </script>
	</body>
</html>