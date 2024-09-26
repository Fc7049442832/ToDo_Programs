<?php
// Write a simple PHP browser detection script.
// Solution :
// Web Browser: A web browser is a software application for accessing information 
//on the world wide web. Each individual web page, image, and video is identified
// by a distinct URL. These URLs enable browsers to retrieve and display them on the
// user's device. A web browser is not the same thing as a search engine

// Display the text "your User Agent is :" Followed by the user agent string from the Http requst
echo "Your User Agent is : ".$_SERVER['HTTP_USER_AGENT'];
