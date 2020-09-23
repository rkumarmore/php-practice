<?php 
include 'db.php';

$sql = 'INSERT INTO employees (name, email, salary) VALUES (?,?,?)';

// $sql = 'UPDATE employees SET name=?, salary=? WHERE email=?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssd', $name, $email, $salary);

$name = '123';
$salary = 1007;
$email = '123@gmail.com';
$stmt->execute();
$name = '123';
$salary = 1007;
$email = '123@gmail.com';
$stmt->execute();
$name = '123';
$salary = 1007;
$email = '123@gmail.com';
$stmt->execute();

$name = '456';
$email = '456@gmail.com';
$salary = 1007;
$stmt->execute();

$name = '789';
$email = '789@gmail.com';
$salary = 1008;
$stmt->execute();

$stmt->close();

echo "Executed Successfully";

if ($conn) {
	$conn->close();
}
