<?php
	// create a connection with mysql under the test account
	$link = mysql_connect('127.0.0.1', 'test', 'testPassword!!1');
	// check the connection
	if (!$link){
		die('Not connected: ' . mysql_error());
	}

	// connect to the sixflags database
	$db_selected = mysql_select_db('sixflags', $link);
	// check the connection
	if (!$db_selected){
		die("Cannot use database 'sixflags': " . mysql_error());
	}

	// $query = "SELECT * FROM promos";
	// $result = mysql_query($query);

	// $students = [];
	// // for each row in the associative array returned by MySQL...
	// while($row = mysql_fetch_assoc($result)){
	// 	// add that row to the students array so we can work with it in PHP
	// 	$students[] = $row;
	// 	//print_r ($row);
	// }

	// print_r $students[]['title'];
	// exit;
