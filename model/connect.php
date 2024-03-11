<?php
$server = 'localhost';
$username = 'Phong';
$password = '123';
$database = 'QSHIP';

$con = mysqli_connect($server, $username, $password, $database);

mysqli_set_charset($con, 'utf8');

if (mysqli_connect_error()) {
    echo "Connection Error: " . mysqli_connect_error();
}
?>
