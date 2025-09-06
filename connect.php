<?php
$dbhost = "localhost";
$dbuser = "root";   // default XAMPP user
$dbpass = "";       // default XAMPP has no password
$dbName = "crud";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName);
if (!$conn) {
    die("Connection failed: " );
}
?>
