<?php
// localhost
$server = "localhost";
$server_username = "root";
$server_password = "";
$server_database = "shop_db";
$home = "http://localhost/WebDynamic/";

//hosting
// $server = "localhost";
// $server_username = "u235219407_rwstrucking";
// $server_password = "Nichole@15";
// $server_database = "u235219407_rwstrucking";
// $home = "https://rws-trucking.tech//";

$conn = mysqli_connect($server, $server_username, $server_password, $server_database);
session_start();

?>