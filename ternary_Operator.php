<!-- 
    Write a PHP function to test whether a number is greater then 30,20 or 110 using ternary Operator.
    Sample Solution :-
-->
<?php
    // Function to test a given number using ternary operators
    function terinary_Test($n){
        
        // Ternary Operators used to check the value of $n and assign a corresponding
        $r = $n > 30 ? "greater than 30 " : ($n > 20 ? "greater than 20 ": ($n >10 ? "greater than 10 ": "Input a number at least greater than 10 !"));

        // Display the result with the input number
        echo $n . " : ". $r ."<br>";
    }

// Test the Function  with different input values
terinary_Test(38);
terinary_Test(29);
terinary_Test(19);
terinary_Test(9);

?>