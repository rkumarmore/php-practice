<?php 
include 'db.php';

$sql = 'SELECT name,email,salary FROM employees';
// $sql = 'SELECT MAX(salary) FROM employees WHERE salary NOT IN (SELECT MAX(salary) FROM employees)';

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$output = '<table><tr><th>Name</th><th>Email</th><th>salary</th></tr>';
	while ($row = $result->fetch_assoc()) {
			$output .= '<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['salary'].'</td></tr>';
	}
	$output .= '</table>';

	echo $output;
}else{
	die("Not Found");
}