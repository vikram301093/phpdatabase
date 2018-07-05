<?php
$dbhost = getenv("uri");
$dbuser = getenv("username");
$dbpwd = getenv("password");
$dbname = getenv("database_name");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
