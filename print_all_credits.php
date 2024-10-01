 <!-- 
    Write a PHP script to print out all the credits for PHP
    Sample Solution : 
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Credits page</title>
</head>
<body>
    <?php
        // call the phpcredits function with the specified credits constant
        phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
        // This part may contain some additional php code specific to your needs
        // For example, you can include more PHP code or Html content here
    ?>
</body>
</html>