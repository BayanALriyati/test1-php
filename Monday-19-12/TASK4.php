<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>To Do List</h1>
<form method="POST">
   <input type="text" name ="title" placeholder="title">
   <br>
   <input type="text" name ="Description"placeholder="Description">
   <br>
   <input type="submit" name ="submit"  value="submit">
</form>

<?php
if (isset($_POST["submit"])){
    $title =$_POST["title"];
    $descr =$_POST["Description"];
    echo "to do ". $title . " description " . $descr;

}
?>

</body>
</html>







