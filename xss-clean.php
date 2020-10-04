<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>XSS</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p> Simple way? Sanitization:
		<ul>
			<li>Escaping it for output to the browser may involve htmlentities and strip_tags <br>
			$str = strip_tags($input);</li>
			<li>You can also use filter_var() for that:<br>
				$str = filter_var($input, FILTER_SANITIZE_STRING);<br>
				The advantage of filter_var() is that you can control the behaviour by, for example, stripping or encoding low and high characters. <br>

				<a href="https://www.php.net/manual/en/filter.filters.sanitize.php">More sanitize options</a> </li>
		</ul>

<p>
 	<b>htmlspecialchars may be used: </b></p>

<ul>
	<li>When there is no need to encode all characters which have their HTML equivalents.
</li>
	<li>If you know that the page encoding match the text special symbols, why would you use htmlentities? htmlspecialchars is much straightforward, and produce less code to send to the client. <br>
		 For example:<br>

echo htmlentities('<Il était une fois un être>.');<br>
// Output: &lt;Il &eacute;tait une fois un &ecirc;tre&gt;.<br>
//                ^^^^^^^^                 ^^^^^^^

echo htmlspecialchars('<Il était une fois un être>.');<br>
// Output: &lt;Il était une fois un être&gt;.<br>
//                ^                 ^
The second one is shorter, and does not cause any problems if ISO-8859-1 charset is set.<br>
</li>
	<li>When the data will be processed not only through a browser (to avoid decoding HTML entities),
</li>
	<li>If the output is XML
</li>
</ul>

<p><b>htmlentities(): </b><br>This function is identical to htmlspecialchars() in all ways, except with htmlentities(), all characters which have HTML character entity equivalents are translated into these entities.</p>
	
	</p>
</body>
</html>


