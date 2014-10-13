<?php
require_once(SODATA . 'database.php');

$so_users_table = "soUsers";

/**
 * Drops the current users table if any 
 * and creates a new one
 */
function users_setup() {
	global $so_users_table;
	$con = so_db_connect();
	
	so_db_drop($so_users_table, $con);
	$query = "CREATE TABLE $so_users_table 
			   (id INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(255) NOT NULL, 
				username VARCHAR(32) NOT NULL UNIQUE,
				citizenship VARCHAR(32) NOT NULL,
				birthdate DATE NOT NULL,
				baptism DATE,
				address TEXT NOT NULL,
				zipcode VARCHAR(64),
				taxid INT,
				socialsecurity INT,
				idcard INT NOT NULL,
				phone INT,
				email VARCHAR(128) NOT NULL UNIQUE,
				password VARCHAR(64) NOT NULL,
				PRIMARY KEY(id))";
	so_db_query($query, $con);
	so_db_disconnect($con);
}

function getSessionUser($session) {
	global $so_users_table;
	$con = so_db_connect();
	
	$query = "SELECT * FROM SESSIONS???";

	so_db_disconnect($con);
	return NULL;
}


function isLogged() {
	return false;
}
?>