<?php
// Write a PHP script, which will return the following componets of the url List of components:Scheme, Host, Path

// URL stands for uniform Resource Locator. It is used to specify its location on a computer network and a mechanism for retrieving it. A URL is the fundamental network identification for any resource connected to the web(e.g hypertext page, images, and sound files).

// Define the URL to be parsed 
$url = "https://job.techradar.site";

// Parsed the URL and store its components in the $url variable
$url = parse_url($url);

// display the scheme (Protocol) of the parsed URL
echo 'Scheme : '. $url['scheme'].'<br>';
// Display the host (domain) of the parsed URL
echo 'Host : '. $url['host'].'<br>';
// Display the path of the parsed URL
echo 'Path : '. $url['path'].'<br>';
