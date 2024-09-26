<?php

// Write a simple PHP program to check that emails are valid.
//Solution :

// Hints : User FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
// Note : The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RF C5321

// Specify an email address (valid or invalid)
$email = "mail@example.com";

// Use the filter_var function with FILTER_VALIDATE_EMAIL to check if the email is valid
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    // If the email is valid, print a message indicating it is 
    echo '"'. $email. '" = Valid'."\n";
}else{
    // If the email is invalid, print a message indicating it is invalid
    echo '"'. $email . '" = Invalid'."\n";
}
?>