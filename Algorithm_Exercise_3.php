<!-- PHP Basic Algorithm: Exercise-3 with Solution -->
<!-- Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
  Sample Solution : -->

 <?php
 //Define a function named "test" that takes two parameters, $x and $y
 function test ($x, $y)
 {
    // Use the logical OR operator to check if $x is equl to 30, $y is equal to 30, or the sum of $x and $y is equal to 30
    return ($x ==30 ) || ($y == 30) || ($x + $y == 30);
 }

 // Use var_dump to print the result of calling test with argumesnts 30 and 0
 var_dump(test(30, 0));
 echo "<br>";
 // Use var_dump to print the result of calling test with arguments 25 and 5
 var_dump(test(20, 30));
 echo "<br>";
 // Use var_dump to print the result of calling test with arguments 20 and 25
 var_dump(test(20,25));

 ?>