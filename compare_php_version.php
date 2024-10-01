<!-- 
    Write a PHP script to compare the PHP version
    Note : Version_compare() function and PHP_VERSION constant.

    Sample Solution :
-->
<?php
    // Check if PHP version is at  least 7.0.0
    if(version_compare(PHP_VERSION, '7.0.0') >= 0){
        echo "I am at least PHP version 7.0.0, my version :". PHP_VERSION ."<br>";
    }

?>