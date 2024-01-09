Heredoc syntax (<<<) is the third way to delimit strings. In Heredoc syntax, an identifier is provided after this heredoc <<< operator, and immediately a new line is started to write any text. To close the quotation, the string follows itself and then again that same identifier is provided. That closing identifier must begin from the new line without any whitespace or tab.

<?php  
    $city = 'Delhi';  
    $str = <<<DEMO  
    Hello! My name is Misthi, and I live in $city.  
    DEMO;  
    echo $str;  
 ?>  

Newdoc
Newdoc is similar to the heredoc, but in newdoc parsing is not done. It is also identified with three less than symbols <<< followed by an identifier. But here identifier is enclosed in single-quote, e.g. <<<'EXP'. Newdoc follows the same rule as heredocs.

The difference between newdoc and heredoc is that - Newdoc is a single-quoted string whereas heredoc is a double-quoted string.

Note: Newdoc works as single quotes.


<?php  
    $str = <<<'DEMO'  
    Welcome to javaTpoint.  
           Learn with newdoc example.  
DEMO;  
echo $str;  
echo '</br>';  
  
echo <<< 'Demo'    // Here we are not storing string content in variable str.  
    Welcome to javaTpoint.  
           Learn with newdoc example.  
Demo;  
?>  