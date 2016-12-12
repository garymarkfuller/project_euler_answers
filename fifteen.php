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
    // https://projecteuler.net/problem=15
    function factorial($number) { 
        if ($number < 2) { 
            return 1; 
        } else { 
            return ($number * factorial($number-1)); 
        } 
    }
    $x = factorial(40) / (factorial(20) * factorial(20));
    echo $x;
        
    ?>
  </body>
</html>        
