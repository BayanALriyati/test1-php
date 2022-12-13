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
    
    // To Get the Current Filename.
    $currentPage= $_SERVER['SCRIPT_NAME'];
      
    // To Get the directory name in 
    // which file is stored.
    $currentPage = substr($currentPage, 1);
      
    // To Show the Current Filename on Page.
    echo $currentPage; 
      ?>
</body>
</html>