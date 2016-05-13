<?php
	include 'includes/db_connect.php';
	$query = 'SELECT * FROM promos';
	$result = mysql_query($query);

	$promo_array = [];
	// for each row in the associative array returned by MySQL...
	while($row = mysql_fetch_assoc($result)){
		// add that row to the promos array so we can work with it in PHP
		$promo_array[] = $row;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/manage.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1>Current Promotions</h1>
		</div>
	</div>
	<div class="row">
		<div class="admin-wrapper col-sm-12">
			<?php foreach($promo_array as $promo): ?>
				<div class="manage-promo col-sm-6 col-md-3">
					<div class="manage-title"><h4><?php print $promo['promo_title']; ?></h4></div>
					<div class="manage-image"><img src="<?php print $promo['header_image']; ?>"></div>
					<div class="manage-text"><p><?php print $promo['header_text']; ?></p></div>
					<a class="btn btn-default" href="edit_promo?id=<?php print $promo['id']; ?>">Edit</a> 
					<a class="btn btn-default" href="delete_promo?id=<?php print $promo['id']; ?>">Delete</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

</body>
</html>