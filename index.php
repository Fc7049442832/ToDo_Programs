<?php
// <!-- Q 1. : Write a php to get the PHP version and configuration information -->
// <!-- Solution -->
  // phpinfo();

// Note: phpinfo() outputs a large amount of information about the current state of php. this 
// includes information about php compilation options and extensions, the php version information,paths, master and local values of configuration options, Http headers and the License.

//  Q 2. : WRite a PHP script to display the following strings.
// Sample Strings :
// 'Tomorrow I\'ll learn php global variables.'
//  'This is a bad command : del c:\\**'

//  Solution :
//  echo "Tomorrow I'll learn PHP global variables."." <br> ";
//  echo "This is a bad command : del c:\\*.*". "\n";

// Write a PHP script, to check whether the page is called form 'https' or 'http'.
// Solution :
// The Hypertext Transfer Protocol (HTTP) is an appliction protocol which allows the fetching of resources, such as HTML documents. HTTP is the foundation of any data exchange on the web and a client-server protocol.
// HTTP Secure(HTTPS) is an extension of the HTTP for secure communication over a computer network, and is widely used on the Internet. In Https, the communication protocol is encrypted using Transport Layer Security (TLS), or formerly, its predecessor, Secure Sockets layer(SSL). The protocol is therefore also often referred to as Http over TLS, or HTTP over SSL.

// Check if  the HTTPS (Secure) Protocol is enabled in the server enviroment
if(empty($_SERVER['HTTP'])){
    // Display a message if HTTPS is enabled
    echo "https is enabled";
}else{
    // Display a message if HTTPS is not enabled
    echo 'http is enabled <br>';
}
?>