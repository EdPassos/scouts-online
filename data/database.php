<?php
require_once(SOPATH . 'settings.php');

function so_db_connect() {
	$con = mysqli_connect(SODBSERVER, SODBUSER, SODBPASSWORD, SODBNAME);
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	return $con;
}

function so_db_disconnect($con) {
	mysqli_close($con);
}

function so_db_drop($table, $con) {
	$query = "DROP TABLE IF EXISTS $table";
	// Execute query
	if (mysqli_query($con,$query)) {
		echo "Table $table dropped<br>";
	} else {
		echo "Error dropping $table: " . mysqli_error($con) . "<br>";
	}
}

function so_db_query($query, $con) {
	if (mysqli_query($con,$query)) {
		echo "Query executed: $query<br>";
	} else {
		echo "Error executing $query: " . mysqli_error($con) . "<br>";
	}
}

?>