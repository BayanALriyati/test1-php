<!-- --------------------Task 1------------------- -->
<?php
echo strtoupper("bayan nu`man al-riyati.");
echo "<br>" ;
echo strtolower("Bayan Nu`man al-riyati.");
echo "<br>" ;
echo ucfirst("bayan nu`man al-riyati.");
echo "<br>" ;
echo ucwords("bayan nu`man al-riyati.");
echo "<br>";
echo '---------------------------------------------------------------------'
?> 

<!-- --------------------Task 2------------------- -->
<?php
echo "<br>";
$str1= '085119'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
echo "<br>";
echo '---------------------------------------------------------------------'
?>

<!-- --------------------Task 3------------------- -->
<?php
echo "<br>";
$str1 =  'I am a full stack developer at orange coding academy.';
if (strpos($str1,'orange') !== false) 
 {
    echo 'Word Found!';
 }
else
 {
    echo ' Not Word Found!';
 }
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>

<!-- --------------------Task 4------------------- -->

<?php
 echo "<br>";
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php" .
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>

<!-- --------------------Task 5------------------- -->

<?php
 echo "<br>";
 $mailid  =  'info@orange.com';
 $user = strstr($mailid, '@', true);
 echo $user."\n";
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>

<!-- --------------------Task6 ------------------- -->

<?php
 echo "<br>";
 $str1 = 'rayy@example.com';
 echo substr($str1, -3)."\n";
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>


<!-- --------------------Task7 ------------------- -->

<?php
 echo "<br>";
 function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
 echo password_generate(7)."\n";
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>


<!-- --------------------Task8------------------- -->

<?php
 echo "<br>";
 $str = 'That new trainee is so genius.';
 echo preg_replace('/That/', 'the', $str, 1)."\n";
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>

<!-- --------------------Task9------------------- -->

<?php
 echo "<br>";
 $str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>

<!-- --------------------Task10------------------- -->


<!-- Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

Sample Output: "Twinkle, twinkle, little star."
Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”}

 echo "<br>";
 echo '--------------------------------------------------------------------' -->


<!-- --------------------Task 11------------------- -->

<?php
 echo "<br>";
 $cha = 'a';
 $next_cha = ++$cha; 
 //The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
 if (strlen($next_cha) > 1) 
 {
  $next_cha = $next_cha[0];
  }
 echo $next_cha."\n";
 echo "<br>";
 echo '--------------------------------------------------------------------'
?>

<!-- -----------------TASK 12----------------- -->

<?php
echo "<br>";
// $original_string = 'The brown fox';
// $string_to_insert ='quick';
// $insert_pos = 4;
// $new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
// echo $new_string."\n";

echo "<br>";
echo '--------------------------------------------------------------------'
?>

<!-- -----------------TASK 13----------------- -->

