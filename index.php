<?php
	include 'includes/db_connect.php';
	include 'includes/seed.php';

	$query = "SELECT * FROM promos";
	$result = mysql_query($query);

	// for each row in the associative array returned by MySQL...
	while($row = mysql_fetch_assoc($result)){
		// add that row to the promos array so we can work with it in PHP
		$promo_array[] = $row;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Six Flags White Water</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</head>
<body>

	<div id="header">
		<div id="header-inner">
			<div id="header-left">
				<div id="logo">
					<img src="images/default-sf-logo.png">
				</div>
			</div>	
			<div id="header-right">
				<div id="top-links">
					<li class="link-item"><a href="#">Park Home</a></li>
					<li class="link-item"><a href="#">National Home</a></li>
					<li class="link-item"><a href="#">Park Map</a></li>
					<li class="link-item"><a href="#">Pass Holder Login</a></li>
					<li class="link-item orange"><a href="#"><img src="images/icon-cart.png"> My Cart [0]</a></li>
					<li class="link-item orange"><a href="#">Enter Promo Code</a></li>
				</div>
				<div id="park-title">Six Flags White Water</div>
				<div id="park-city">Atlanta</div>
			</div>
		</div>
	</div>

	<div id="nav-bar">
		<div id="nav-inner">
			<li class="menu-item"><a href="#">THINGS TO DO</a></li>
			<li class="menu-item"><a href="#">PLAN VISIT</a></li>
			<li class="menu-item"><a href="#">WHAT'S NEW</a></li>
			<li class="menu-item"><a href="#">EVENTS</a></li>
			<li class="menu-item"><a href="#">PARK HOURS</a></li>
			<li class="menu-item"><a href="#">GROUPS</a></li>
			<li class="menu-item green"><a href="#">PASSES &amp; MEMBERSHIPS</a></li>
			<li class="menu-item green"><a href="#">TICKETS</a></li>
		</div>
	</div>

	<div id="main-content">
		<div id="slideshow">
			<img src="images/hp_BlackRiverFalls_ATLWP.jpg">
		</div>
		<div id="swoosh">
			<!-- Empty -->
		</div>

		<div id="promotions">

			<?php foreach($promo_array as $promo): ?>

			<div class="promo">
				<div class="promo-title">
			 		<?php print $promo['promo_title']; ?>
		 		</div>
			 	<div class="promo-image">
			 		<img src="<?php print $promo['header_image']; ?>">
			 	</div>
				<div class="promo-text-wrapper">
			 		<div class="promo-text-title">
						<?php print $promo['header_text']; ?>
			 		</div>
			 		<div class="promo-text">
			 			<?php print $promo['body_text']; ?>				
			 		</div>
			 	</div>
			 	<div class="promo-small">
			 		<div class="promo-small-image">
			 			<img src="<?php print $promo['lower_image']; ?>">
			 		</div>
			 		<div class="promo-small-text-title">
			 			<?php print $promo['lower_header']; ?>
			 		</div>
			 		<div class="promo-small-text">
			 			<?php print $promo['lower_text']; ?>
			 		</div>
			 	</div>
			 	<div class="promo-small">
			 		<div class="promo-small-image">
			 			<img src="<?php print $promo['lower_image2']; ?>">
			 		</div>
			 		<div class="promo-small-text-title">
			 			<?php print $promo['lower_header2']; ?>
			 		</div>
			 		<div class="promo-small-text">
			 			<?php print $promo['lower_text2']; ?>
			 		</div>
			 	</div>
			 </div>

			<?php endforeach; ?>

		</div> <!-- end of promotions -->

	</div> <!-- end of main content -->

	<div id="footer">
		<div id="footer-inner">
			<ul>
				<li>Things to Do</li>
				<li>Rides</li>
				<li>Height Requirements</li>
				<li>Events</li>
				<li>Food &amp; Dining</li>
				<li>Shopping</li>
			</ul>
			<ul>
				<li>Tickets &amp; Packages</li>
				<li>One-Day Tickets</li>
				<li>Season Passes</li>
				<li>Group Sales</li>
				<li>THE FLASH Pass</li>
				<li>Special Offers</li>
			</ul>
			<ul>
				<li>Plan Your Visit</li>
				<li>Park Hours</li>
				<li>Directions</li>
				<li>Park Map</li>
				<li>Guests with Disabilities</li>
				<li>Lodging</li>
			</ul>
			<ul>
				<li>Interact with Us</li>
				<li>Email Signup</li>
				<li>Contact Us</li>
				<li>Lost and Found</li>
				<li>Member Support</li>
				<li>Pass Holder Login</li>
			</ul>
			<ul>
				<li>About Us</li>
				<li>Newsroom</li>
				<li>Community</li>
				<li>Corporate Partners</li>
				<li>National Site</li>
				<li>Investor Site</li>
			</ul>
		</div>
	</div>
</body>
</html>