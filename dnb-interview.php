<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<body>
	<ul>
		<li>
			<strong>Difference Between include and require Statements</strong>
			You might be thinking if we can include files using the include() statement then why we need require(). Typically the require() statement operates like include().

			The only difference is — the include() statement will only generate a PHP warning but allow script execution to continue if the file to be included can't be found, whereas the require() statement will generate a fatal error and stops the script execution.
		</li>
		<li><strong>Cookikes and Sessions</strong>
			Cookies and Sessions are used to store information. Cookies are only stored on the client-side machine, while sessions get stored on the client as well as a server.

			<strong>Session</strong>

			A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.

			A session ends when the user closes the browser or after leaving the site, the server will terminate the session after a predetermined period of time, commonly 30 minutes duration.

			<strong>Cookies</strong>

			Cookies are text files stored on the client computer and they are kept of use tracking purpose. Server script sends a set of cookies to the browser. For example name, age, or identification number etc. The browser stores this information on a local machine for future use.

			When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.
		</li>
		<li><strong>Types of arrays</strong>
			There are three types of arrays that you can create. These are:

			Indexed array — An array with a numeric key.
			Associative array — An array where each key has its own specific value. In an associative array, the keys assigned to values can be arbitrary and user defined strings
			Multidimensional array — An array containing one or more arrays within itself. The multidimensional array is an array in which each element can also be an array and each element in the sub-array can be an array or further contain array within itself and so on.
		</li>
		<li><strong>Hypertext Transfer Protocol (HTTP) Methods</strong>
			<ul>
				<li>GET</li>
				<li>POST</li>
				<li>PUT - PUT is used to send data to a server to create/update a resource. The difference between POST and PUT is that PUT requests are idempotent. That is, calling the same PUT request multiple times will always produce the same result. In contrast, calling a POST request repeatedly have side effects of creating the same resource multiple times.</li>
				<li>HEAD - HEAD is almost identical to GET, but without the response body.</li>
				<li>DELETE</li>
				<li>PATCH</li>
				<li>OPTIONS - The OPTIONS method describes the communication options for the target resource.</li>
			</ul>
		</li>
		<li><strong>GET Vs POST</strong>
			<ul>
				<li>GET requests can be cached</li>
				<li>GET requests remain in the browser history</li>
				<li>GET requests can be bookmarked</li>
				<li>GET requests should never be used when dealing with sensitive data</li>
				<li>GET requests have length restrictions and length of a URL is limited (maximum URL length is 2048 characters)</li>
				<li>GET requests are only used to request data (not modify)</li>
			</ul>
			<ul>
				<li>POST requests are never cached</li>
				<li>POST requests do not remain in the browser history</li>
				<li>POST requests cannot be bookmarked</li>
				<li>POST requests have no restrictions on data length</li>
			</ul>

			<table class="">
				<tbody>
					<tr>
						<th style="width:30%">&nbsp;</th>
						<th style="width:35%">GET</th>
						<th>POST</th>
					</tr>
					<tr>
						<td>BACK button/Reload</td>
						<td>Harmless</td>
						<td>Data will be re-submitted (the browser should alert the user that the data are about to be re-submitted)</td>
					</tr>
					<tr>
						<td>Bookmarked</td>
						<td>Can be bookmarked</td>
						<td>Cannot be bookmarked</td>
					</tr>
					<tr>
						<td>Cached</td>
						<td>Can be cached</td>
						<td>Not cached</td>
					</tr>
					<tr>
						<td>Encoding type</td>
						<td>application/x-www-form-urlencoded</td>
						<td>application/x-www-form-urlencoded or multipart/form-data. Use multipart encoding for binary data</td>
					</tr>
					<tr>
						<td>History</td>
						<td>Parameters remain in browser history</td>
						<td>Parameters are not saved in browser history</td>
					</tr>
					<tr>
						<td>Restrictions on data length</td>
						<td>Yes, when sending data, the GET method adds the data to the URL; and the length of a URL is limited (maximum URL length is 2048 characters)</td>
						<td>No restrictions</td>
					</tr>
					<tr>
						<td>Restrictions on data type</td>
						<td>Only ASCII characters allowed</td>
						<td>No restrictions. Binary data is also allowed</td>
					</tr>
					<tr>
						<td>Security</td>
						<td>GET is less secure compared to POST because data sent is part of the URL<br>
							<br>
							Never use GET when sending passwords or other sensitive information!
						</td>
						<td>POST is a little safer than GET because the parameters are not stored in browser history or in web server logs</td>
					</tr>
					<tr>
						<td>Visibility</td>
						<td>Data is visible to everyone in the URL</td>
						<td>Data is not displayed in the URL</td>
					</tr>
				</tbody>
			</table>

		</li>
		<li><strong>Final classes and methods</strong>
			<strong>Final Methods</strong>
			The final keyword prevents child classes from overriding a method by prefixing the definition with final. It means if we define a method with final then it prevents us to override the method.
			<strong>Final Classes</strong>
			If the class itself is being defined final then it can not be extended. It means when we define a class with final then it will not allow defining its child class.
		</li>
		<li>
			<scripts>Magic Methods</scripts>
			<p>Magic methods in PHP are special methods that are aimed to perform certain tasks. These methods are named with double underscore (__) as prefix. All these function names are reserved and can't be used for any purpose other than associated magical functionality. Magical method in a class must be declared public. These methods act as interceptors that are automatically called when certain conditions are met.</p>
			<ul>
				<li>__construct() - method that gets called automatically after the creation of an object</li>
				<li>__destruct() - a common feature of the object-oriented language that gets triggered as soon as there are no other references to a particular object</li>
				<li>__call($fun, $arg) - This method is called when an undefined or inaccessible method is called. Which means it is Called when an undefined or inaccessible method is invoked on an object.</li>
				<li>__callStatic($fun, $arg) - This method is called when an undefined or inaccessible method is invoked in a static manner.</li>
				<li>__get($property) - This method is used for getting values for class properties created dynamically by PHP property overloading.</li>
				<li>__set($property, $value) - This method is used for putting values for class properties created dynamically by PHP property overloading.</li>
				<li>__isset($content) - This method will be called while calling isset() or empty() for an undefined or inaccessible member.</li>
				<li>__unset($content) - This method will be called while calling reset() for an undefined or inaccessible member.</li>
				<li>__serialize</li>
				<li>__unserialize</li>
				<li>__sleep() - This method is called first while executing serialize(). It returns the object’s property array on cleaning PHP class objects before serialization.</li>
				<li>__wakeup() - This method is called while deserialization() is executed. It would reverse work to restore objects properties and resources on invoking deserialization().</li>
				<li>__toString() - This method will be called while using echo method to print an object directly. It is expected to return a string value while using class instances with PHP printing statements.</li>
				<li>__invoke() - This method is defined in a class that will be called while trying to call an object in a way of calling function. Ex: $obj()</li>
				<li>__set_state($array) - This method is called while calling var_export(). It is a static method invoked while exporting objects property array and expects such array variable as its argument.</li>
				<li>__clone() - This method is called when the object is copied. Ex: $obj2 = clone $obj;</li>
				<li>__debugInfo() - This method is called by var_dump() while dumping an object to get the properties that should be shown. If the method is not defined on an object, then all public, protected and private properties will be shown.</li>
			</ul>
		</li>
		<li><strong>Var_dump vs var_export</strong>
			var_export() gets structured information about the given variable.
			It is similar to var_dump() with one exception: the returned representation is valid PHP code.
		</li>
		<li><strong>Callback Functions</strong>
			A callback function (often referred to as just "callback") is a function which is passed as an argument into another function
			Ex: $lengths = array_map("my_callback", $strings);<br>
			$lengths = array_map( function($item) { return strlen($item); } , $strings);
		</li>
		<li><strong>MySQL extensions</strong>
			<ul>
				<li>MySQLi extension (the "i" stands for improved)</li>
				<li>PDO (PHP Data Objects)</li>
			</ul>
			PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases. <br>
			Both are object-oriented, but MySQLi also offers a procedural API <br>
			A great benefit of PDO is that it has an exception class to handle any problems that may occur in our database queries. If an exception is thrown within the try{ } block, the script stops executing and flows directly to the first catch(){ } block.

			<ul>
				<li>$servername = "localhost";
					$username = "username";
					$password = "password";

					try {
					$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					echo "Connected successfully";
					} catch(PDOException $e) {
					echo "Connection failed: " . $e->getMessage();
					}
					$conn = null;
				</li>
				<li>$servername = "localhost";
					$username = "username";
					$password = "password";

					// Create connection
					$conn = new mysqli($servername, $username, $password);

					// Check connection
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}
					echo "Connected successfully";
					$conn->close();
				</li>
			</ul>
		</li>
		<li><strong>Prepared Statements and Bound Parameters</strong>
			A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
			<ol>
				<li>Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)</li>
				<li>The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it</li>
				<li>Execute: At a later time, the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values</li>
			</ol>
			Compared to executing SQL statements directly, prepared statements have three main advantages:
			<ul>
				<li>Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)</li>
				<li>Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query</li>
				<li>Prepared statements are very useful against SQL injections, because parameter values, which are transmitted later using a different protocol, need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.</li>
			</ul>



		</li>
	</ul>
</body>

</html>