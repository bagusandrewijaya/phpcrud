<?php
$host = "localhost";
$dbname = "absensi";
$username = "root";
$password = "";

$mysqli = new mysqli( $host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
die("Connection error" . $mysql->connect_error);
}

return $mysqli;