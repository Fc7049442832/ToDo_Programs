<?php
// Write a PHP script to get the current file name.
// Solution :
// A Computer file is a computer resource on a computer that stores data,
// information, picture, video, settings, settings, or commands used with a computer program.
// In a graphical user interface an operating system displays a file as an icon.

// GET the base name of the currently executing php script file
$current_file_name = basename($_SERVER['PHP_SELF']);
// Display the current file name followed by a newline character
echo $current_file_name;