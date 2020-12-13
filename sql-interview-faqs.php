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
		<li><strong>What is Constraint?</strong>
			A constraint is simply a restriction placed on one or more columns of a table to limit the type of values that can be stored in that column. Constraints provide a standard mechanism to maintain the accuracy and integrity of the data inside a database table.

			There are several different types of constraints in SQL, including:
			<ol>
			<li>NOT NULL</li>
			<li>PRIMARY KEY</li>
			<li>UNIQUE</li>
			<li>DEFAULT</li>
			<li>FOREIGN KEY</li>
			<li>CHECK</li>
			</ol>
		</li>
		<li><strong>Types of Joins</strong>
			<ul>
				<li><strong>Inner join</strong>
					A join that returns only those rows that have a match in both joined tables. For example, you can join the employees and departments tables to create a result set that shows the department name for each employee. In an inner join, employees for which there is no department information are not included in the result set, nor are departments with no employees.
				</li>
				<li><strong>Outer join</strong>
					Outer joins are an extension to inner joins. An outer join returns the rows even if they don't have related rows in the joined table. There are three types of outer joins: left outer join (or left join), right outer join (or right join), and full outer join (or full join).
				</li>
				<li><strong>Cross join</strong>
					Cross joins are joins without a join condition. Each row of one table is combined with each row of another table. This type of result set is called a Cartesian product or cross product. For example, a cross join between the employees and departments tables yields a result set with one row for each possible employees/departments combination.
				</li>

			</ul>

		</li>
		<li><strong>Wildcard Characters</strong>
			<table >
				  <tbody><tr>
				    <th>Symbol</th>
				    <th>Description</th>
				    <th>Example</th>
				  </tr>
				  <tr>
				    <td>%</td>
				    <td>Represents zero or more characters</td>
				    <td>bl% finds bl, black, blue, and blob</td>
				  </tr>
				  <tr>
				    <td>_</td>
				    <td>Represents a single character</td>
				    <td>h_t finds hot, hat, and hit</td>
				  </tr>
				  <tr>
				    <td>[]</td>
				    <td>Represents any single character within the brackets</td>
				    <td>h[oa]t finds hot and hat, but not hit</td>
				  </tr>
				  <tr>
				    <td>^</td>
				    <td>Represents any character not in the brackets</td>
				    <td>h[^oa]t finds hit, but not hot and hat</td>
				  </tr>
				  <tr>
				    <td>-</td>
				    <td>Represents a range of characters</td>
				    <td>c[a-b]t finds cat and cbt</td>
				  </tr>
				  </tbody></table>
		</li>
		<li><strong>Self JOIN</strong>
			A self JOIN is a regular join, but the table is joined with itself.
			<code>
			SELECT
			    e.first_name + ' ' + e.last_name employee,
			    m.first_name + ' ' + m.last_name manager
			FROM
			    sales.staffs e
			INNER JOIN sales.staffs m ON m.staff_id = e.manager_id
			ORDER BY
			    manager;
			    </code>
			    <code>
			    	SELECT
					    c1.city,
					    c1.first_name + ' ' + c1.last_name customer_1,
					    c2.first_name + ' ' + c2.last_name customer_2
					FROM
					    sales.customers c1
					INNER JOIN sales.customers c2 ON c1.customer_id > c2.customer_id
					AND c1.city = c2.city
					ORDER BY
					    city,
					    customer_1,
					    customer_2;
			    </code>		
		</li>
		<li><strong>Views to Simplify Table Access</strong>
			A view is a virtual table whose definition is stored in the database. But, unlike tables, views do not actually contain any data. Instead, it provides a way to store commonly used complex queries in the database. However, you can use the view in a SQL SELECT statement to access the data just as you would use a normal or base table.

Views can also be used as a security mechanism by allowing users to access data through the view, rather than giving them direct access to the entire base tables.

		<code>
			CREATE VIEW emp_dept_view AS
			SELECT t1.emp_id, t1.emp_name, t2.dept_name
			FROM employees AS t1 LEFT JOIN departments AS t2
			ON t1.dept_id = t2.dept_id;
		</code>	
		</li>
		<li><strong>What is Index?</strong>
			An index is a data structure associated with a table that provides fast access to rows in a table based on the values in one or more columns (the index key).
		</li>
		<li><strong>Cloning or Copying a Table</strong>
			Step 1: Creating an Empty Table, CREATE TABLE new_table LIKE original_table;<br>
			Step 2: Inserting Data into Table, INSERT INTO new_table SELECT * FROM original_table; <br>

			CREATE TABLE new_table SELECT * FROM original_table;
		</li>
		<li><strong>Temporary Tables</strong>
			A temporary table is a table that is visible only to the current session, and is dropped automatically when the session in which it was created is closed. <br>
			CREATE TEMPORARY TABLE table_name (column definitions); <br>
			CREATE TEMPORARY TABLE persons SELECT * FROM persons; <br>

			A temporary table can have the same name as a permanent base table. If you specify the name of a temporary table same as the existing base table, then the permanent base table is hidden until the temporary table is dropped.
		</li>
		<li><strong>What is SQL Injection?</strong>
			SQL injection is an attack wherein an attacker can inject or execute malicious SQL code via the input data from the browser to the application server, such as web-form input.
		</li>
		<li><strong>Preventing SQL Injection</strong>
			Always validate user input and make no assumptions. Never build SQL statements directly from user input. If you're using PHP and MySQL you can use mysqli_real_escape_string() function to create a legal SQL string that you can use in an SQL statement.

		</li>
		<li><strong>SQL Aggregate Functions</strong>
			<table class="data">
                    	<tbody>
							<tr>
								<th style="width: 90px;">Function</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>AVG()</code></td>
								<td>Returns the average of values</td>
							</tr>					
							<tr>
								<td><code>SUM()</code></td>
								<td>Returns the sum of values</td>
							</tr>
							<tr>
								<td><code>COUNT()</code></td>
								<td>Returns the number of rows in a result set</td>
							</tr>
							<tr>
								<td><code>MAX()</code></td>
								<td>Returns the maximum value</td>
							</tr>
							<tr>
								<td><code>MIN()</code></td>
								<td>Returns the minimum value</td>
							</tr>
						</tbody>
					</table>

		</li>
		<li><strong>SQL String Functions</strong>
			<table class="data">
                    	<tbody>
							<tr>
								<th style="width: 90px;">Function</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>CONCAT()</code></td>
								<td>Returns a string by concatenating two or more string values.</td>
							</tr>					
							<tr>
								<td><code>CONCAT_WS()</code></td>
								<td>Returns a string by concatenating two or more string values with a separator.</td>
							</tr>
							<tr>
								<td><code>FORMAT()</code></td>
								<td>Returns a value formatted with the specified format.</td>
							</tr>
							<tr>
								<td><code>LOWER()</code></td>
								<td>Converts a string to lowercase.</td>
							</tr>
							<tr>
								<td><code>UPPER()</code></td>
								<td>Converts a string to uppercase.</td>
							</tr>
							<tr>
								<td><code>TRIM()</code></td>
								<td>Remove leading and trailing spaces from a string.</td>
							</tr>
							<tr>
								<td><code>REVERSE()</code></td>
								<td>Returns the reverse order of a string value.</td>
							</tr>
							<tr>
								<td><code>SUBSTRING()</code></td>
								<td>Returns a substring from string.</td>
							</tr>
						</tbody>
					</table>

		</li>
		<li><strong>SQL Date Functions</strong>
			<table class="data">
                    	<tbody>
							<tr>
								<th style="width: 90px;">Function</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>NOW()</code></td>
								<td>Returns the current date and time.</td>
							</tr>					
							<tr>
								<td><code>CURDATE()</code></td>
								<td>Returns the current date.</td>
							</tr>
							<tr>
								<td><code>CURTIME()</code></td>
								<td>Returns the current time</td>
							</tr>
							<tr>
								<td><code>DATE()</code></td>
								<td>Extract the date part of a date or datetime expression.</td>
							</tr>							
							<tr>
								<td><code>DAY()</code></td>
								<td>Returns the day of the month (0-31).</td>
							</tr>
							<tr>
								<td><code>DAYNAME()</code></td>
								<td>Returns the name of the weekday.</td>
							</tr>
							<tr>
								<td><code>MONTH()</code></td>
								<td>Returns the month from the date passed (1-12).</td>
							</tr>
							<tr>
								<td><code>MONTHNAME()</code></td>
								<td>Returns the name of the month.</td>
							</tr>
							<tr>
								<td><code>YEAR()</code></td>
								<td>Returns the year.</td>
							</tr>
							<tr>
								<td><code>DATE_FORMAT()</code></td>
								<td>Displays date and time value in other formats.</td>
							</tr>
							<tr>
								<td><code>EXTRACT()</code></td>
								<td>Extract part of a date.</td>
							</tr>
							<tr>
								<td><code>DATE_ADD()</code></td>
								<td>Adds a specified time value (or interval) to a date value.</td>
							</tr>
							<tr>
								<td><code>DATE_SUB()</code></td>
								<td>Subtracts a specified time value (or interval) from a date value.</td>
							</tr>
							<tr>
								<td><code>DATEDIFF()</code></td>
								<td>Returns the number of days between two dates</td>
							</tr>
						</tbody>
					</table>
		</li>
		<li><strong>SQL Server Date Functions</strong>
			<table class="data">
                    	<tbody>
							<tr>
								<th style="width: 90px;">Function</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>GETDATE()</code></td>
								<td>Returns the current date and time.</td>
							</tr>					
							<tr>
								<td><code>DATEPART()</code></td>
								<td>Returns the specified datepart of the specified date e.g. <code>DATEPART(year,'2016-10-25')</code> return 2016.</td>
							</tr>
							<tr>
								<td><code>DAY()</code></td>
								<td>Returns the day of the month (0-31).</td>
							</tr>
							<tr>
								<td><code>MONTH()</code></td>
								<td>Returns the month from the specified date (0-12).</td>
							</tr>
							<tr>
								<td><code>YEAR()</code></td>
								<td>Returns the year from the specified date.</td>
							</tr>
							<tr>
								<td><code>DATEADD()</code></td>
								<td>Adds or subtracts a specified time interval from a date.</td>
							</tr>
							<tr>
								<td><code>DATEDIFF()</code></td>
								<td>Returns the date or time between two specified dates.</td>
							</tr>
							<tr>
								<td><code>CONVERT()</code></td>
								<td>Displays date and time value in other formats.</td>
							</tr>
						</tbody>
					</table>

		</li>
		<li><strong>Case</strong>

			set @r1=0, @r2=0, @r3=0, @r4=0;
			select min(Doctor), min(Professor), min(Singer), min(Actor)
			from(
			  select case when Occupation='Doctor' then (@r1:=@r1+1)
			            when Occupation='Professor' then (@r2:=@r2+1)
			            when Occupation='Singer' then (@r3:=@r3+1)
			            when Occupation='Actor' then (@r4:=@r4+1) end as RowNumber,
			    case when Occupation='Doctor' then Name end as Doctor,
			    case when Occupation='Professor' then Name end as Professor,
			    case when Occupation='Singer' then Name end as Singer,
			    case when Occupation='Actor' then Name end as Actor
			  from OCCUPATIONS
			  order by Name
			) Temp
			group by RowNumber

		</li>
		<li><strong>Database Relationships</strong>
			One to One Relationships <br>
			One to Many and Many to One Relationships <br>
			Many to Many Relationships <br>
			Self Referencing Relationships <br>
		</li>
		<li><strong></strong>

		</li>
		<li><strong></strong>

		</li>
		<li><strong></strong>

		</li>
		<li><strong></strong>

		</li>
		<li><strong></strong>

		</li>
	</ul>
</body>
</html>