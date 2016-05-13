<?php
	
	include 'includes/db_connect.php';


	if (isset($_GET['task'])){
		if ($_GET['task'] == "update"){

			$thing_to_update = '';
			foreach($_POST as $key=>$value){
				$thing_to_update .= $key . "='" . $value . "',";
			}

			$trimmed_update = rtrim($thing_to_update, ",");
			$query = 'UPDATE promos SET ' . $trimmed_update . ' WHERE id = ' . $_GET['id'];

			mysql_query($query);
			header('Location: admin.php?done=updated');
		} else if ($_GET['task'] == "delete"){

			// if the task is to delete the promo, the query is more simply to build...
			$query = 'DELETE FROM promos WHERE id = ' . $_GET['id'];

			mysql_query($query);
			header('Location: admin.php?done=deleted');
		}
	} else {

		// if it is a new promotion, build the query a bit differently...
		// create a couple of empty strings to hold the data columns and the data strings
		$db_cols = '';
		$fields = '';
		// take the value of each input field in the form and add a comma 
		foreach($_POST as $key=>$value){
			$db_cols .= $key . ',';
			$fields .= "'" . $value . "',";
		}
		// trim the last comma from the end of the data strings
		$db_cols_trim = rtrim($db_cols, ",");
		$fields_trim = rtrim($fields, ",");

		// build the mysql query with trimmed data
		$query = 'INSERT INTO promos (' . $db_cols_trim . ') VALUES (' . $fields_trim . ')';
		// send the query to mysql
		mysql_query($query);
		// let the admin page know that the form was successfully updated
		header('Location: admin.php?done=added');
	}
