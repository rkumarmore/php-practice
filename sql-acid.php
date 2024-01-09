<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<body>
	<p>
		<strong>ACID </strong>is a set of properties of database transactions intended to guarantee data validity despite errors, power failures, and other mishaps. <br>
		<strong>Transaction</strong>
		In the context of databases, a sequence of database operations that satisfies the ACID properties is called a transaction.
	</p>
	<p>
		<strong>Atomicity:</strong> A transaction must be completed in its entirety or not at all. If a transaction aborts in the middle, all operations up to that point must be completely nullified.
		<br>
		<strong>Consistency:</strong> A transaction must transform a database from one consistent state to another consistent state. In other words, all data in a database must work as a state machine. The database must ensure all data is consistent at all times with all rules.
		<br>
		<strong>Isolation:</strong> Each transaction must occur independently of other transactions occurring at the same time. In other words, queries and transactions always run at a point in time. You can query data while many other users are changing data and you will not see their changes, and they will not see each other’s changes.
		<br>
		<strong>Durability:</strong> Committed transactions must be fully recoverable in all but the most extreme circumstances. Write-ahead logs provide absolute data durability until data is eventually written into permanent data and index files.
	</p>
</body>

</html>