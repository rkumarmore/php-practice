<?php 
$db = 'practice';
$host = 'localhost';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);

if (!$conn) {
	die($conn->connect_error);
}