<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="username"> 
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="send"> 
        </form>
<?php
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    echo "THIS is method post";
    // else {
    //     echo "THIS is method GET";
    // }
    
}

?>
</body>
</html>

