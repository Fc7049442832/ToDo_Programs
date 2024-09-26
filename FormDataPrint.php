<!-- Q.3 : Create a simple HTML Form and accept the user name and display the name through php echo statement.
 Solution : -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <!-- HTML form with Post method -->
    <form action="" method="Post">
        <h3>please input your name : </h3>
        <input type="text" name="name" id="">
        <input type="submit" value="Submit">
    </form>
    <?php
        // Check if the form is submitted and 'name' is set in $_Post
        if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['name'])){
            // Retrieve name from the form and store it in a local variable
            $name = $_POST['name'];
            // Display a greeting message with the entered name
            if($name == ''){
                echo "<h3>Please Enter Your name !</h3>";
            }else{
                echo "<h3> Hello $name , How are You ? </h3";
            }     
        }
    ?> 
</body>
</html>