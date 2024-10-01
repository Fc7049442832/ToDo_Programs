<!-- 
Write a PHP script to get the names of the functions of a module. 
Sample Solution:
-->
<?php
    // Get the names of  all function provided by the JSON extension
    $json_extension_fuhcs = get_extension_funcs('JSON');
    // Print the list of JSON extensio functions
    echo "<pre>";
    print_r( $json_extension_fuhcs);
    echo "</pre> <br>";

    // Get the names of all functions provided by the XML extension
    $xml_extension_funcs = get_extension_funcs("XML");
    // Print the list of XML extension functions
    echo "<pre>";
    print_r($xml_extension_funcs);
    echo "</pre>";

?>