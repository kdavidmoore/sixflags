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
