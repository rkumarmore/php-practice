<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="col-md-10" style="text-align: left;"> 




<h1>Unbuffered queries for large data sets: MYSQLI_USE_RESULT</h1><p>
  So far we've been using the <em>mysqli_query()</em> function to do all our data searching in PHP, and it works well enough for the vast majority of cases. However, consider this: how does the <em>mysqli_num_rows()</em> function know how many rows <em>mysqli_query()</em> returned? The answer is simple: <em>mysqli_query()</em> runs the query, and fetches and buffers it all so that it has the complete result set available. The <em>mysqli_num_rows()</em> function then has access to all the rows, and so can return the true row count.
</p>
<p>
  But, what do you do if you have a large number of rows and don't want to wait before MySQL has finished fetching them all before you start using them? In this scenario, passing a special parameter to <em>mysqli_query()</em> causes it to execute the query and return a resource pointing to the result of the query while MySQL is still working, which means you can start reading before the query has finished. This is called an unbuffered query, and is triggered using the special query mode MYSQLI_USE_RESULT.
</p>
<p>
  Earlier I used the example of a golfscores table with 1,000,000 rows. It takes MySQL about 20 seconds to return all that data to PHP when using <em>mysqli_query()</em>, and if you consider that on top of that PHP might do another 20 seconds of work to format and print out that data, the total is 40 seconds of work, of which you see nothing for the first 20 seconds. Using <em>mysqli_query()</em> in its default mode therefore has several obvious disadvantages:
</p>
<ul>
  <li>
    <p>
      PHP must wait while the entire query is executed and returned before it can start processing.
    </p>
  </li>
  <li>
    <p>
      In order to return the whole result to PHP at once, all the data must be held in RAM. Thus, if you have 100MB of data to return, the PHP variable to hold it all will be 100MB.
    </p>
  </li>
</ul>
<p>
  The disadvantages of <em>mysqli_query()</em> happen to be the advantages of these unbuffered queries:
</p>
<ul>
  <li>
    <p>
      The PHP script can parse the results immediately, giving immediate feedback to users.
    </p>
  </li>
  <li>
    <p>
      Only one row at a time need be held in RAM.
    </p>
  </li>
</ul>
<p>
  One nice feature of unbuffered queries is that, internally to PHP, it is almost identical to <em>mysqli_query()</em> â€“ you just provide an extra parameter. As a result, you can almost use them interchangeably inside your scripts. For example, this script works fine in either mode:
</p>
<pre><code class="php hljs"><span class="hljs-variable">$db</span> = mysqli_connect(<span class="hljs-string">"localhost"</span>, <span class="hljs-string">"php"</span>, <span class="hljs-string">"alm65z"</span>, <span class="hljs-string">"phpdb"</span>);
    <span class="hljs-variable">$result</span> = mysqli_query(<span class="hljs-variable">$db</span>, <span class="hljs-string">"SELECT ID, Name FROM conferences;"</span>, MYSQLI_USE_RESULT);
    
    <span class="hljs-keyword">while</span> (<span class="hljs-variable">$row</span> = mysqli_fetch_assoc(<span class="hljs-variable">$result</span>)) {
        extract(<span class="hljs-variable">$row</span>, EXTR_PREFIX_ALL, <span class="hljs-string">"conf"</span>);
        <span class="hljs-keyword">print</span> <span class="hljs-string">"$conf_Name\n"</span>;
    }
</code></pre>
<p>
  Before you rush off to make all your queries unbuffered, be aware that there are drawbacks:
</p>
<ul>
  <li>
    <p>
      You <em>must</em> read all rows from the return value. If you're thinking of using as a quick way to find something then stop processing the rows part way through, you're way off track - sorry!
    </p>
  </li>
  <li>
    <p>
      If you issue another query before you finish processing all the rows from the previous query, PHP will issue a warning. SELECTs within SELECTs are not possible with unbuffered queries.
    </p>
  </li>
  <li>
    <p>
      Functions such as <em>mysqli_num_rows()</em> only return the number of rows read so far. This will be 0 as soon as the query returns, but as you call <em>mysqli_fetch_assoc()</em> it will increment until it has the correct number of rows at the end.
    </p>
  </li>
  <li>
    <p>
      Between the time you start your unbuffered query and your processing the last row, the table remains locked by MySQL and cannot be written to by other queries. If you plan to do lengthy processing on each row, this is not good.
    </p>
  </li>
</ul>
<p>
  Choosing whether you want to run a buffered query or not takes a little thinking - if you're not sure what's best, you should almost certainly stay with the standard buffered queries.
</p><p>&nbsp;</p>



								</div>
</body>
</html>