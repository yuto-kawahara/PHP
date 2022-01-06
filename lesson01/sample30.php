
<?php
require('./sample31/intax.php');
$price = 150;
$price_tax = add_tax($price);
echo $price_tax;
