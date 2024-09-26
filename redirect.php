<?php
// Write  a PHP script to redirect a user to a different page.
// Solution :

    // User the header function to send a raw  HTTP header
    // In this case, the header function is used perform a redirection
    // The 'Location' header specifies the URL to which the user will be redirected
    header('Location: https://DomainName/Path');
?>