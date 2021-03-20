<?php

require_once 'Product.php';

$pro = new Product();
echo $pro->getProductType();
$pro->setProductType('Flashdisk');
echo '<br>';
echo $pro->getProductType();

?>