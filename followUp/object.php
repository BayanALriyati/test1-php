<?php
session_start(); 
class user {
    public $name ;
    public $age  ;
    public $money ;
    function __construct ($name,$age,$money ){
    $this-> name = $name ; ////name is key in object
    $this-> age = $age ;
    $this-> money= $money ;
}
}
$user1 = new user ("Bayan","26","100 JOD");
echo "<br>";
// print-r ($user1) ;
echo "<br>";
echo " $user1->name is $user1->age and has $user1->money "; ////////((name,age,money) is key in object),(give value to new obeject ($name,$age,$money )"bayan","26","100 JOD").
$_SESSION["name"]=$user1->name;
$_SESSION["age"]=$user1->age;
$_SESSION["money"]=$user1->money;

?>