file_get_contents ( string $filename [, bool $use_include_path = FALSE [, resource $context [, int $offset = 0 [, int $maxlen ]]]] ) : string
This function is similar to file(), except that file_get_contents() returns the file in a string, starting at the specified offset up to maxlen bytes. On failure, file_get_contents() will return FALSE.

file_get_contents() is the preferred way to read the contents of a file into a string. It will use memory mapping techniques if supported by your OS to enhance performance.

<?php
$homepage = file_get_contents('http://www.example.com/');
echo $homepage;
?>

<?php
// If strict types are enabled i.e. declare(strict_types=1);
$file = file_get_contents('./people.txt', true);
// Otherwise
$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);
?>


file() - Reads entire file into an array
fgets() - Gets line from file pointer
fread() - Binary-safe file read
readfile() - Outputs a file
file_put_contents() - Write data to a file
stream_get_contents() - Reads remainder of a stream into a string
stream_context_create() - Creates a stream context
$http_response_header