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
    // https://projecteuler.net/problem=7
    $number = 31;
    $prime_divisors = array (2,3,5,7,11,13,17,19,23,29);
    while (count($prime_divisors) < 10001){      
      foreach($prime_divisors as $value){
        if($number % $value === 0) {
          break;
        } elseif (end($prime_divisors) === $value) {
          array_push($prime_divisors, $number);
        } else {
          continue;
        }
      }      
      $number = $number + 2;      
    }
    echo end($prime_divisors);
    ?>
  </body>
</html>

