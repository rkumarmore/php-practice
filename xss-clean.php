Simple way? Use strip_tags():

$str = strip_tags($input);

You can also use filter_var() for that:

$str = filter_var($input, FILTER_SANITIZE_STRING);
The advantage of filter_var() is that you can control the behaviour by, for example, stripping or encoding low and high characters.

more sanitize options https://www.php.net/manual/en/filter.filters.sanitize.php

