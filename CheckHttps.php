<?php
// Write a PHP script, to check whether the page is called form 'https' or 'http'.
// Solution :
// The Hypertext Transfer Protocol (HTTP) is an appliction protocol which allows the fetching of resources, such as HTML documents. HTTP is the foundation of any data exchange on the web and a client-server protocol.
// HTTP Secure(HTTPS) is an extension of the HTTP for secure communication over a computer network, and is widely used on the Internet. In Https, the communication protocol is encrypted using Transport Layer Security (TLS), or formerly, its predecessor, Secure Sockets layer(SSL). The protocol is therefore also often referred to as Http over TLS, or HTTP over SSL.

// Check if  the HTTPS (Secure) Protocol is enabled in the server enviroment
if(empty($_SERVER['HTTPS'])){
    // Display a message if HTTPS is enabled
    echo "https is enabled";
}else{
    // Display a message if HTTPS is not enabled
    echo 'http is enabled <br>';
}