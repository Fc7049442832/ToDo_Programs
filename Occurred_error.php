<!-- 
    Write a PHP script to get the last Occurred error.
    Sample Solution:     
-->
<?php 
    // Attempt to echo the variable $x (which is not defined)
    echo $x;

    // Print the details of the last error that occurred using error
    print_r(error_get_last());
?>