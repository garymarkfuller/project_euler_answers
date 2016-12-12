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
        $from  = new DateTime('1901-01-01');
        $to = new DateTime('2000-12-31');
        $interval = new DateInterval('P7D');
        $daterange = new DatePeriod($from, $interval ,$to);

        foreach($daterange as $date){
            if($date->format("d") == '1') {
            $array[] = $date->format("Ymd") . "<br />";
            }
        }
        echo count($array);
 
    ?>
  </body>
</html>