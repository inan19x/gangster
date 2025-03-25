<?php
$host="dbhost";
$username="dbuser";
$password="dbpassw";
$db_name="gangster";

$mysqli = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
}
?>
