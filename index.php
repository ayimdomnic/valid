<?php
require __DIR__.'/../src/Plansky/CreditCard/Generator.php';
require __DIR__.'/../src/Plansky/CreditCard/LuhnCalculator.php';

$generator = new Plansky\CreditCard\Generator();
$generator->lot(10, 531169, 16);

return $generator


 ?>