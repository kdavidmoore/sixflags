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
		<div class="col-sm-12 text-center">
			<h1>Administrative Menu</h1>
			<?php 
				if (isset($_GET['done'])){
					
					if ($_GET['done'] == "updated"){
						$message = 'Your promo has been updated in the database.';
					} else if ($_GET['done'] == "added"){
						$message = 'Your promo has been added to the database.';
					} else if ($_GET['done'] == "deleted"){
						$message = 'That promo has been deleted from the database.';
					}

					print '<h4>' . $message . '</h4>';
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="admin-wrapper col-sm-12 text-center">
			<a href="add_promo.php" class="btn btn-default">Create a New Promotion</a>
			<a href="manage_promos.php" class="btn btn-default">Update an Existing Promotion</a>
		</div>
	</div>
</div>

</body>
</html>