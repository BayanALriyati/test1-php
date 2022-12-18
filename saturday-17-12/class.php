<!-- -----------------task 1----------------- -->
<?php
class MyClass {
  public function __construct() 
  {
   echo 'MyClass class has initialized !'."\n";
  }
 }
$userclass = new MyClass;
echo "<br>";
echo "------------------------------";
?>

<!-- -----------------task 2----------------- -->
<?php
echo "<br>";
class introductory {
    public function introductory($name) {
      echo "Hello All, I am $name";
    }
  }
  
  $intro = new introductory();
  $intro->introductory("Bayan");
echo "<br>";
echo "------------------------------";
?>

<!-- -----------------task 3----------------- -->
<?php
echo "<br>";
class Factorial {
    public static function calculate($n) {
      if ($n < 0) {
        throw new Exception('Factorial is not defined for negative numbers');
      }
      if ($n == 0) {
        return 1;
      }
      return $n * self::calculate($n - 1);
    }
  }
  echo Factorial::calculate(5); 
  echo("<br>");

  class ArraySorter {
    public static function sort($array) {
      sort($array);
      return $array;
    }
  }
  $array = [11, -2, 4, 35, 0, 8, -9];
  $sortedArray = ArraySorter::sort($array);
  print_r($sortedArray);
echo "<br>";
echo "------------------------------";
?>

<!-- -----------------task 4----------------- -->
<?php
echo "<br>";
$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
echo "<br>";
echo "------------------------------";
?>

<!-- -----------------task 5----------------- -->
<?php
echo "<br>";
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;
echo "<br>";
echo "------------------------------";
?>


