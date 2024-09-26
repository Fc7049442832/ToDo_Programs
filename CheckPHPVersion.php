<!-- 
Write a PHP script to print current PHP version.

Note Do Not use PHPinfo() function
-->
<?php
    // Output the current PHP version 
    echo 'Current PHP version : '. phpversion();

    // Output the version of the Tidy extension , or noteing if the extension isn't enabled
    echo phpversion('tidy'). "\n";