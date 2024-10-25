<!-- 
    Write a PHP script to get the time of the last modification of the current page.
    Sample Solution:
-->
<?php 
//  Get the last modification time of the current script using 
$last_modified_time = getlastmod();
// Format the last modification time and prit it
echo "last modified : " . date("F d Y H:i:s .", $last_modified_time). "<br>";

?>