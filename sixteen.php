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
    // https://projecteuler.net/problem=16
    $x = number_format(pow(2, 1000), 0, '', '');
    $array = str_split($x);
    $answer = array_sum($array);
    echo $answer;
    ?>
  </body>
</html>

