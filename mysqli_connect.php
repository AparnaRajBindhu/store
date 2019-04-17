<?php

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'project1');

$user="root";
$pass="";
$host="localhost";
$db="project1";
$dbc = @mysqli_connect($host, $user, $pass, $db)
OR
die('Could not connect to MySQL: ' . mysqli_connect_error() );
echo "successfully connected";
mysqli_set_charset($dbc, 'utf8');


?>