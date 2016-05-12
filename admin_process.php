<?php
	
	include 'includes/db_connect.php';

	$promo_title = "'".$_POST[promo_title]."'";
	$header_image = "'".$_POST[header_image]."'";
	$header_text = "'".$_POST[header_text]."'";
	$body_text = "'".$_POST[body_text]."'";
	$lower_image = "'".$_POST[lower_image]."'";
	$lower_header = "'".$_POST[lower_header]."'";
	$lower_text = "'".$_POST[lower_text]."'";
	$lower_image2 = "'".$_POST[lower_image]."'";
	$lower_header2 = "'".$_POST[lower_header2]."'";
	$lower_text2 = "'".$_POST[lower_text2]."'";

	$query = 'INSERT INTO promos
		(promo_title, header_image, header_text, body_text, lower_image, lower_header,
		lower_text, lower_image2, lower_header2, lower_text2)
		VALUES
		('.$promo_title.', '.$header_image.', '.$header_text.', '.$body_text.', '.$lower_image.', '.$lower_header.', '.$lower_text.', '.$lower_image2.', '.$lower_header2.', '.$lower_text2.')';

	$result = mysql_query($query);

	print mysql_error();
	print "<br/>";
	print 'Finished';
