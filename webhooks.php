<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h5>Webhook</h5>
	A webhook (also called a web callback or HTTP push API) is a way for an app to provide other applications with real-time information. A webhook delivers data to other applications as it happens, meaning you get data immediately.

	add to get the details using webhook:
	
	$x = file_get_contents("php://input");
    header("HTTP/1.1 200 OK");
    $notification = json_decode($x);

	<h5>Callback</h5>
	A callback function is executed after the current effect is 100% finished.
</body>
</html>

<?php 
 	$x = file_get_contents("php://input");
    header("HTTP/1.1 200 OK");
    $notification = json_decode($x);