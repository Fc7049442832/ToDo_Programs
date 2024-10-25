<!-- Write a PHP program to compute the sum of the two give integer values. If the two values are the same, then returns triple their sum.
Sample Solution:
-->
<?php 

// Define a function named "test" that takes two parameters, $x and $y

function test($x, $y)
{
    // Use the ternary operator to check if $x is equal to $y
    // If true, return the result of multiplying  the sum of $x and $y by 
    // If false, return the sum of  $x and $y
    if($x == $y)
    {
        $z = ($x + $y)*3 ;
    }else{
        $z = $x + $y;
    }

    return $z;
}
 // call the text function with arguments 1 and 2, and echo the result
 echo test(1,2) ."\n";

 // call the test function with arguments  3 and 2, and echo the result
 echo test(3,2).  "\n";

 // Call the test function with arguments 2 and 2, and echo the result
 echo test(2,2). " \n ";

 ?>