<?PHP
$discount = 0.15;
$applyDiscount = fn($price) => $price = $price - ($price * $discount);


echo $applyDiscount(200000);
?>

