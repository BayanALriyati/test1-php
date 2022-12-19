<?php
  
// Demonstrate the use of header() function
// to refresh the current page
   
echo "Welcome to index page</br>";
echo "we will redirect to GeeksForGeeks Official website in 1 second";
    
// The function will redirect to geeksforgeeks official website
header("refresh: 1; url = https://www.geeksforgeeks.org/");
    
exit;
?>