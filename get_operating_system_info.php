<!-- 
    Write a PHp script to get the information about the operating System PHP is running on.
    
    Sample Solution :
-->
<?php 
    // Get and echo the system name, version, and machine type using php_uname()
    echo php_uname() . "<br>";

    // Echo the operating system PHP is runing on 
    echo PHP_OS . "<br>";

    // Check if the operating system is Windows using the PHP_OS constant
    if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
        echo 'This is a server using Windows !';
    }else{
        echo 'This is a server not using Windows!'."<br>";
    }

?>