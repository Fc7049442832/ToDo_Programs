<!-- PHP Basic Algorithm: Exercise-2 with Solution -->

<!-- Write a PHP program to get the get the absolute diffence between n and 51. If n is greater than 51 return triple the absolute difference.
Sample Solution : 
-->

<?php
// Define  a function named "test" that takes a parameter $n 
function test($n)
{ 
    // Declare a variable $x and assign it the value 51
    $x =51 ;
    
    // check if $n is grater than $x
    if($n > $x){
        // If true, return the result of multiplying the difference between $n and $x by 3
        return ($n - $x)*3;
    }

    // If false, return the difference between $x and $n
    return $x - $n ;
}

//  Call the test function with argument 53 and echo the result 
echo test(53). "<br>";

// Call the test function with argument 30 and echo the result
echo  test(30). "<br>";

// Call the test function with argument 51 and echo the result 
echo test(51). "\n";
?>