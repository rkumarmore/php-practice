<?php

include 'db.php';

//Not Working
// $sql = 'DELETE FROM employees WHERE employees.id IN  ( SELECT MAX(id) FROM employees GROUP BY name, email HAVING COUNT(*) > 1)';

//> Keeps first row and < keeps last row
$sql = 'DELETE t1 FROM employees t1 INNER JOIN employees t2 WHERE t1.id < t2.id AND t1.name=t2.name AND t1.email = t2.email';

//Needs duplicate primary keys
// $sql = 'CREATE TABLE emp SELECT DISTINCT name,email,salary FROM employees';

//Perfect
/*CREATE TABLE temp LIKE employees;  
ALTER TABLE temp ADD UNIQUE INDEX (name,email,salary); 
INSERT INTO temp(name,email,salary) SELECT DISTINCT name,email,salary FROM employees;  
TRUNCATE TABLE employees;
INSERT INTO employees SELECT * FROM temp; 
DROP TABLE temp;*/

if ($conn->query($sql)) {
	die('Successfully deleted');
} else {
	die('Failed');
}
