<!-- Write a PHP  script to display source code of a webpage -->
<!-- Solution : 
  Webpage : A web page is a document that is suitable for the World Wide Web and 
  web browsers. A web browser displays a web page on monitor or mobile device
  
  The web page usually means what is visible, but the term may also refer to a computer file, 
  usually written in HTML or a comparable markup language. Web browsers coordinate various web
  resource elements for the written web page, such as style sheets, scripts, and images, to 
  present the web page.
  -->
<?php 
    // Read all lines from the specified URL and store them in an array
    $all_lines = file('https://techradar.site');

    // Iterate through each line in the array 
    foreach($all_lines as $line_num => $line)
    {
        // Display the line number and the HTML-escaped content of the line
        echo "Line No. -{$line_num} : ".htmlspecialchars($line)."<br>";
    }

