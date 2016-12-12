<!DOCTYPE html>
<!--
Project Euler is my chance to practice PHP using mathematical problems.
@author Gary Fuller
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    // https://projecteuler.net/problem=20
    function factorial($number) { 
        if ($number < 2) { 
            return 1; 
        } else { 
            return ($number * factorial($number-1)); 
        } 
    }
    $x = number_format(factorial(100), 0, '', '');
    echo $x . "<br />";
    $array = str_split($x);
    $answer = array_sum($array);
    echo $answer;
        
    ?>
  </body>
</html> 
