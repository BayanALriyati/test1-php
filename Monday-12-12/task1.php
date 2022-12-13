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
    $a=1000 ;
    $b=1200 ;
    $c=1400 ;
    $_session['table'] = "<table border=1 cellspacing=0 cellpading=0>
    <tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr> 
    <tr> <td><font color=blue>Salary of Mr. B is</td> <td>$b$</font></td></tr>
    <tr> <td><font color=blue>Salary of Mr. C is</td> <td>$c$</font></td></tr>
    </table>" ;
    echo $_session['table'] ;
    print_r($_SESSION) ; 
    ?>
   
</body>
</html>