<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $file = basename($_SERVER['PHP_SELF']); 
   $no_of_lines = count(file($file)); 
   echo "There are $no_of_lines lines in $file"."\n";
   ?>
   
</body>
</html>