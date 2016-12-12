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
    // https://projecteuler.net/problem=14
    for($i = 1; $i <= 1000000; $i++) {
        $number = 0;
        while($number !== 1){
        $number = $i;
        if ($number % 2 === 0) {
            $number = $number / 2;
        } else {
            $number = ($number * 3) + 1;
        }
        $number_array[] = $number; 
        }
        $count_array[$i] = count($number_array);
    }
    var_dump($count_array);
    
    //n → n/2 (n is even)
    //n → 3n + 1 (n is odd)
    
    ?>
  </body>
</html>