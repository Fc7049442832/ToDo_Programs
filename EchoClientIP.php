<?php
// Write a PHP script to get the client Ip address

// Solution :
// IP address: An Internet Protocol address is a numerical label assigned to each device connected
// to a computer network that user the internet Protocol for communication. An IP address serves two
// principal functions. host or network interface identification and location addressing
 
    // Check if the IP is from share internet 
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    // Check if the IP is  from a proxy
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // If not from shared internet or Prox, consider it as the remote address
    else{
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    // Display the determind IP address
    echo $ip_address;
