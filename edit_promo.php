<?php
	include 'includes/db_connect.php';

	$id = $_GET['id'];
	$query = 'SELECT * FROM promos WHERE id = ' . $id;
	$result = mysql_query($query);
	$promo_to_fill = mysql_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Promotion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1>Edit an Existing Promotion</h1>
		</div>
	</div>
	<div class="row">

		<div class="admin-wrapper col-sm-6 col-sm-offset-3">
			<form action="admin_process.php?task=update&id=<?php print $id; ?>" method="POST">
			  <div class="form-group">
				<label for="promo_title">Promo Title</label>
				<input type="text" class="form-control" id="promo_title" name="promo_title" placeholder="Title" value="<?php print $promo_to_fill['promo_title']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="header_image">Header Image</label>
				<input type="text" class="form-control" id="header_image" name="header_image" placeholder="Path to file" value="<?php print $promo_to_fill['header_image']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="header_text">Header Text</label>
				<input type="text" class="form-control" id="header_text" name="header_text" placeholder="Header" value="<?php print $promo_to_fill['header_text']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="body_text">Body Text</label>
				<input type="text" class="form-control" id="body_text" name="body_text" placeholder="Body" value="<?php print $promo_to_fill['body_text']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="lower_image">Lower Image</label>
				<input type="text" class="form-control" id="lower_image" name="lower_image"  placeholder="Path to file" value="<?php print $promo_to_fill['lower_image']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="lower_header">Lower Header</label>
				<input type="text" class="form-control" id="lower_header" name="lower_header" placeholder="Header" value="<?php print $promo_to_fill['lower_header']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="lower_text">Lower Text</label>
				<input type="text" class="form-control" id="lower_text" name="lower_text" placeholder="Text" value="<?php print $promo_to_fill['lower_text']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="lower_image">Lower Image 2</label>
				<input type="text" class="form-control" id="lower_image2" name="lower_image2" placeholder="Path to file" value="<?php print $promo_to_fill['lower_image2']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="lower_header2">Lower Header 2</label>
				<input type="text" class="form-control" id="lower_header2" name="lower_header2" placeholder="Header" value="<?php print $promo_to_fill['lower_header2']; ?>" required>
			  </div>
			  <div class="form-group">
				<label for="lower_text2">Lower Text 2</label>
				<input type="text" class="form-control" id="lower_text2" name="lower_text2" placeholder="Text" value="<?php print $promo_to_fill['lower_text2']; ?>" required>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>