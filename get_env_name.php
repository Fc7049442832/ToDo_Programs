<!-- 
Write a PHP scirpt to get the document root directory under which the current script is executing, as defined in the server's configuration file.
Sample Solution: 
-->
<?php
    // getenv() gets the value of an environment variable named 'DOCUMENT_ROOT'
    $rd = getenv('DOCUMENT_ROOT');
    
    // Echo the value of the Document_Root environment variable 
    echo $rd  . "<br>";

?>