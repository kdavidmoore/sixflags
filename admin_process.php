<?php
	
	include 'includes/db_connect.php';

	// create a couple of empty strings to hold the data columns and the data
	$db_cols = '';
	$fields = '';
	// take the value of each input field in the form and add a comma 
	foreach($_POST as $key=>$value){
		$db_cols .= $key.',';
		$fields .= "'".$value."',";
	}
	// trim the last comma from the end of the data strings
	$db_cols_trim = rtrim($db_cols, ",");
	$fields_trim = rtrim($fields, ",");

	// build the mysql query with trimmed data
	$query = 'INSERT INTO promos ('.$db_cols_trim.') VALUES ('.$fields_trim.')';

	// send the query to mysql
	mysql_query($query);
	// let the admin page know that the form was successfully updated
	header('Location: add_promo.php?updated=true');
