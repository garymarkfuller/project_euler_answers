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
    use Kwn\NumberToWords;
    
    // build the registry of transformer factories we want to work with
    $registry = new TransformerFactoriesRegistry([
        new EnglishTransformerFactory
    ]);

    // create the number to words "manager" class
    $numberToWords = new NumberToWords($registry);

    // build a new number transformer using the RFC 3066 language identifier
    $numberTransformer = $numberToWords->getNumberTransformer('en');
    
    $numberTransformer->toWords(5120);
    ?>
  </body>
</html>