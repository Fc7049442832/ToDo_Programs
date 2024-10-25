<!-- Write a PHP program that creates a custom exception class in PHP and throw an instance of it within a try block. -->
<?php
 class CustomException extends Exception{
    public function _construct($message, $code = 0, Throwable $previous = null){
        parent::_construct($messaage, $code, $previous);
    }

    public function _toString(){
        return _CLASS_ . ": [{$this->code}]: {$this->message}\n";
    }
 }

 try{
    // Code that may throw a custom exception
    $roll_no = -12;

    if($roll_no < 0){
        throw new CustomException("Roll number cannot be negative.");
    
    }
    echo "Roll Number : ". $roll_no;
 } catch (CustomException $e){
    // Custom  exception handling code
    echo "An error occurred : ". $e->getMessage();
 }

?>