<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'userdb';

//$connection = mysqli_connect(dbserver, dbuser, dppass, dbname);
$connection = mysqli_connect('localhost', 'root', '', 'userdb');

//mysqli_connect_errno();  mysqli_connect_error();

//checking the connection
if (mysqli_connect_errno()) {
    die('Database connection failed' . mysqli_connect_error());
}


?>