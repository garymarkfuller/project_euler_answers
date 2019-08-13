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
    // https://projecteuler.net/problem=17
    
    require_once 'vendor/autoload.php';
    use NumberToWords\NumberToWords;

    // create the number to words "manager" class
    $numberToWords = new NumberToWords();

    // build a new number transformer using the RFC 3066 language identifier
    $numberTransformer = $numberToWords->getNumberTransformer('en');

    $number_array= '';
    for($i = 1; $i <= 1000; $i++) {
        $number_array .= str_replace('-', '', str_replace(' ', '', $numberTransformer->toWords($i)));
    }
    echo $number_array . '<br />';
    echo strlen($number_array) + 99 * 9 * 3;
    $f = new NumberFormatter("en-GB", NumberFormatter::SPELLOUT);
    $number_array = '';
    for($i = 1; $i <= 1000; $i++) {
        $number_array .= str_replace('-', '', str_replace(' ', '', $f->format($i)));
    }
    echo $number_array . '<br />';
    echo strlen($number_array);
    ?>
  </body>
</html>