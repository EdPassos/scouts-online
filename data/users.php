<?php
require_once(SODATA . 'database.php');

$so_users_table = "soUsers";

/**
 * Running setup function will create new tables
 * Any previous user data will be erased
 */
function users_setup() {
	global $so_users_table;
	$con = so_db_connect();
	so_db_drop($so_users_table, $con);
	$query = "CREATE TABLE $so_users_table 
			   (id INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(255) NOT NULL, 
				username VARCHAR(32) NOT NULL UNIQUE,
				email VARCHAR(128) NOT NULL UNIQUE,
				password VARCHAR(64) NOT NULL,
				PRIMARY KEY(id))";
	so_db_query($query, $con);
	so_db_disconnect($con);
}

?>