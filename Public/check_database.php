<?php

/**
 * Check the database connection details are ok.
 *
 * *** Temporary script that should be deleted before putting live! ***
 *
 * PHP version 5.4
 */

/**
 * Database connection data
 */
$host = "127.0.0.1";
$db_name = "MVC";
$user = "root";
$password = "rootpass";



/**
 * Create a connection
 */
$conn = new mysqli($host, $user, $password, $db_name);

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// $mysqli = new mysqli('127.0.0.1', 'root', 'rootpass', 'MVC');

// /* Set the desired charset after establishing a connection */
// $mysqli->set_charset('utf8mb4');

// printf("Success... %s\n", $mysqli->host_info);


/**
 * Check the connection
 */
if ($conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
} else {
  echo "Connected successfully, connection data are ok.";
}
