<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$host = "uzb4o9e2oe257glt.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$port = "3306";
$username = "v6ammxmq583wesuy";
$user_pass = "vybkmm7p8cosz1m3";
$database_in_use = "e6qsexjtcl76zt8t";


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>