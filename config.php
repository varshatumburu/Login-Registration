<?php

$server = '127.0.0.1:3307';
$username = 'root';
$password = 'password';
$database = 'employee';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
	die("<script>alert('Connection Failed.')</script>");
}
