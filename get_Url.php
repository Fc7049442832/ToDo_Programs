<!-- 
    Write a PHP script to get the full URL.
    Sample Solution:
-->
<?php
    // Constructing the full URL using $_SERVER variables
    $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // Display the constructed full URL
    echo $full_url . "<br>";
?>