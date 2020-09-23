<?php 
include 'db.php';

// $sql = 'SELECT MAX(salary) as second_highest FROM employees WHERE salary NOT IN (SELECT MAX(salary) FROM employees)';
// $sql = 'SELECT MAX(salary) as second_highest FROM employees WHERE salary < (SELECT MAX(salary) FROM employees)';
// $sql = 'SELECT salary FROM (SELECT salary FROM employees ORDER BY salary DESC LIMIT 2) AS Emp ORDER BY salary LIMIT 1';

$n = 2;
$sql= "SELECT salary FROM employees e WHERE $n=(SELECT COUNT( DISTINCT salary) FROM employees t WHERE e.salary<= t.salary)";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while ($row = $result->fetch_assoc()) {
		print_r($row);
		echo '<br>';
	}
	
	
}else{
	die("Not Found");
}