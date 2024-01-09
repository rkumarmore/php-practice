<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SQL Injection</title>
	<link rel="stylesheet" href="">
</head>

<body>
	<p>
		Direct SQL Command Injection is a technique where an attacker creates or alters existing SQL commands to expose hidden data, or to override valuable ones, or even to execute dangerous system level commands on the database host. This is accomplished by the application taking user input and combining it with static parameters to build an SQL query. The following examples are based on true stories, unfortunately.
	</p>
	<ul>
		<li>Never connect to the database as a superuser or as the database owner. Use always customized users with very limited privileges.</li>
		<li>Use prepared statements with bound variables. They are provided by PDO, by MySQLi and by other libraries.</li>
		<li>Check if the given input has the expected data type. PHP has a wide range of input validating functions, from the simplest ones found in Variable Functions and in Character Type Functions (e.g. is_numeric(), ctype_digit() respectively) and onwards to the Perl compatible Regular Expressions support.</li>
		<li>If the application waits for numerical input, consider verifying data with ctype_digit(), or silently change its type using settype(), or use its numeric representation by sprintf().</li>
		<li>mysqli::real_escape_string -- mysqli::escape_string -- mysqli_real_escape_string — Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection</li>
		<li>
			<p>The addslashes() function returns a string with backslashes in front of predefined characters.<br>

				The predefined characters are:<br>
				single quote (')<br>
				double quote (")<br>
				backslash (\)<br>
				NULL <br>
			</p>This function can be used to prepare a string for storage in a database and database queries.
		</li>
	</ul>
</body>

</html>