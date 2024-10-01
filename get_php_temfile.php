<!-- 
    Write a PHP script to get the directory path used for temporary files.
    Sample Solution:
-->
<?php
    // Generate a temporary file with a unique filename
    // the tempname() function creates a temporary file with a unique name in the system's temporary directory
    $temp_file = tempnam(sys_get_temp_dir(), 'Tux');
    // Output the path of th created temporary file
    echo $temp_file. "<br>";
?>

