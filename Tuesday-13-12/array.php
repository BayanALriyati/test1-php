<!-- -----------------TASK 1----------------- -->
<?php
$array = ['red' , 'green' , 'white'] ;
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $array[0] carpet, the $array[1] lawn, the $array[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" ;
echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 2----------------- -->

<?php
$colors = array("white" , "red" ,"green" );

foreach ($colors as $value) {
  echo "<ul>";
  echo "<li>$value</li>";
  echo "</ul>";
}
echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 3----------------- -->

<?php
echo "<br>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort($cities) ;
print_r ($cities);
echo "<br>";
echo "<br>";
foreach($cities as $country => $value) {
    echo "The capital of $country is $value" . "<br>";
  }

echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 4----------------- -->

<?php
echo "<br>";
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>                                                                                         

<!-- -----------------TASK 5----------------- -->

<?php
echo "<br>";
$original = array( '1','2','3','4','5' );
foreach ($original as $x) 
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
foreach ($original as $x) 
echo "$x ";
echo "<br>" ;
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 6----------------- -->

<?php
echo "<br>";
$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
asort($fruits) ;
print_r ($fruits);
echo "<br>";
echo "<br>";
foreach($fruits as $x => $val) {
    echo "$x = $val<br>";
  }

echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 7----------------- -->

<?php
echo "<br>";
$array = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $array);
$num1 = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temperature )
{
 $num1 += $temperature ;
}
 $average = $num1/$temp_array_length;
 echo "Average Temperature is : ".$average. "."; 
 echo "<br>";
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $temp_array[$i].".";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-7); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].".";
}
echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 8----------------- -->

<?php
echo "<br>";
$array1 = array("color"=>"red",2,4 );
$array2 = array("a","b","color"=>"green","shape"=>"trapezoid",4);
$res = array_merge($array1, $array2);
echo "<pre>";
print_r($res);
echo "</pre>" ;
echo "<br>" ;
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 9----------------- -->

<?php
echo "<br>";
$colors=array("red","blue","white","yellow");
foreach($colors as  $value) {
  echo strtoupper($value) . "<br>";
}
// echo '<pre>';
// print_r($Colors);
// echo '</pre>';
echo "<br>";
echo '--------------------------------------------------------------------';
$colors1=array("red","blue","white","yellow");
$newColors1 =[];
for($i=0;$i<count($colors1);$i++){
    $newColors1[$i]= strtoupper($colors1[$i]);
};
echo '<pre>';
print_r($newColors1);
echo '</pre>';

echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 10----------------- -->

<?php
echo "<br>";
echo implode(",",range(200,250,4))."\n";
echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 11----------------- -->

<?php
echo "<br>";
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>

<!-- -----------------TASK 12----------------- -->

<?php
echo "<br>";
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}

echo "<br>";
echo '-------------------------------------------------------------------'
?>
<?php
echo "<br>";
for($i=0 ; $i<=9; $i++){
  echo rand(11,20) . " , ";
};

echo "<br>";
echo '//////////////////////////////////////////////////////////////////////'
?>



