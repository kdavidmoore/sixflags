<?php
	include 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="admin-wrapper col-sm-6 col-sm-offset-3">
			<form action="admin_process.php" method="POST">
			  <div class="form-group">
				<label for="promo_title">Promo Title</label>
				<input type="text" class="form-control" id="promo_title" name="promo_title" placeholder="Title" required>
			  </div>
			  <div class="form-group">
				<label for="header_image">Header Image</label>
				<input type="text" class="form-control" id="header_image" name="header_image" placeholder="Path to file" required>
			  </div>
			  <div class="form-group">
				<label for="header_text">Header Text</label>
				<input type="text" class="form-control" id="header_text" name="header_text" placeholder="Header" required>
			  </div>
			  <div class="form-group">
				<label for="body_text">Body Text</label>
				<input type="text" class="form-control" id="body_text" name="body_text" placeholder="Body" required>
			  </div>
			  <div class="form-group">
				<label for="lower_image">Lower Image</label>
				<input type="text" class="form-control" id="lower_image" name="lower_image"  placeholder="Path to file" required>
			  </div>
			  <div class="form-group">
				<label for="lower_header">Lower Header</label>
				<input type="text" class="form-control" id="lower_header" name="lower_header" placeholder="Header" required>
			  </div>
			  <div class="form-group">
				<label for="lower_text">Lower Text</label>
				<input type="text" class="form-control" id="lower_text" name="lower_text" placeholder="Text" required>
			  </div>
			  <div class="form-group">
				<label for="lower_image">Lower Image 2</label>
				<input type="text" class="form-control" id="lower_image2" name="lower_image2" placeholder="Path to file" required>
			  </div>
			  <div class="form-group">
				<label for="lower_header2">Lower Header 2</label>
				<input type="text" class="form-control" id="lower_header2" name="lower_header2" placeholder="Header" required>
			  </div>
			  <div class="form-group">
				<label for="lower_text2">Lower Text 2</label>
				<input type="text" class="form-control" id="lower_text2" name="lower_text2" placeholder="Text" required>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>