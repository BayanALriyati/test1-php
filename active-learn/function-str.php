
<!-- ///Convert the first character of string to lowercase: -->
<?php
 echo lcfirst("ORANGE Academy!"); 
 echo "<br>";
 echo '--------------------------------------------------------------------'
 ?>

<!-- Return the number of characters found in the string that contains the characters "word": -->
 <?php
  echo "<br>";
  echo strspn("ORANGE Academy cohort 
  two!","ORANGEnn");
  echo "<br>";
  echo '--------------------------------------------------------------------'
 ?>

 <!-- Find the position of the last occurrence of word inside the string -->
 <?php
  echo "<br>";
  echo strrpos("cohort two ORANGE Academy cohort 
  two!","cohort");
  echo "<br>";
  echo '--------------------------------------------------------------------'
 ?>





















































<!-- ///Remove characters from the left side of a string: -->
<!-- <?php
 echo "<br>";
 $str = "ORANGE Academy cohort two!";
 echo $str . "<br>";
 echo ltrim($str,"ORANGE Academy cohort ");
 echo "<br>";
 echo '--------------------------------------------------------------------'
 ?> -->

 <!-- Find the first occurrence of "word" inside "string" and return the rest of the string: -->
 <!-- <?php
 echo "<br>";
 echo strstr("ORANGE Academy cohort two!","cohort");
 echo "<br>";
 echo '--------------------------------------------------------------------'
 ?> -->