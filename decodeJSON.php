<!-- Write a PHP script  to decode a JSON string.   -->

<!-- Sample Solution : -->

<?php 
    // Define a JSON string containing key-value  pairs
    $json = '{
            "uglify-js": "1.3.4",
            "Jshint" : "0.9.1",
            "recess" : "1.1.8",
            "connect": "2.1.3",
            "hogan.js": "2.0.0"    
        }';

    // Decode the JSON string into a php object 
    echo " <pre>";
    var_dump(json_decode($json));

    // Output a newline character for formatting
    echo " </pre>";
    
    // Decode the Json string into an associative array
    var_dump(json_decode($json,true));
?>