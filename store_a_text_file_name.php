<!-- Write a PHP Script to count number of lines in a file.
Note : Store a Text file name into a variable and count the number of lines of text it has. 
-->
<!-- Sample Solution : -->
 <?php 
 // Get the base name of the current php script file 
 $file = basename($_SERVER['PHP_SELF']);

 //Count the number of lines in the current PHP script file 
 $no_of_lines = count(file($file));

 // Display the result indicating the number of lines in the file
 echo "There are $no_of_lines lines in $file". "\n";

 ?>