<?php

// previous solution
$loyaltyPoints = 5000;
$totalCost = 50;


// Check if the loyalty points balance is less than 3000
if ($loyaltyPoints < 3000) {
    // If true, inform the customer that no discount is available due to insufficient points
    echo 'You have fewer than 3000 Loyalty Points. No discount is available.';
    $discount = 0;
} // Check if the loyalty points balance is less than 6000 but more than or equal to 3000
else if ($loyaltyPoints < 6000) {
    // If true, offer the option to spend 3000 points for a 5% discount
    echo 'You can spend 3000 Loyalty Points for a discount of 5%.';
    $discount = 0.05;
} // For loyalty points balance of 6000 or more
else if ($loyaltyPoints > 6000) {
    // Offer the option to spend 6000 points for a 15% discount
    echo "You can spend 6000 Loyalty Points for a discount of 15%.";
    $discount = 0.15;
}
echo '<br>';


$totalCostAfterDiscount = $totalCost - ($totalCost * $discount);
$totalCostWithTax = $totalCostAfterDiscount + ($totalCostAfterDiscount * 0.08);;

echo $totalCostWithTax;

$newloyaltyPoints = $loyaltyPoints + $totalCostWithTax * 100;

if ($loyaltyPoints < 3000) {
    echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be \${$totalCostWithTax}. Your new Loyalty Balance would be: {$newloyaltyPoints}.";
} else if ($loyaltyPoints < 6000) {
    $theNewLoyaltyPoints = $newloyaltyPoints - 3000;
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$totalCostWithTax}. Your new Loyalty Balance would be: {$theNewLoyaltyPoints}.";
} else if ($loyaltyPoints > 6000) {
    $theNewLoyaltyPoints = $newloyaltyPoints - 3000;
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$totalCostWithTax}. Your new Loyalty Balance would be: {$theNewLoyaltyPoints}.";

    $theNewLoyaltyPoints = $newloyaltyPoints - 6000;
    echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be \${$totalCostWithTax}. Your new Loyalty Balance would be: {$theNewLoyaltyPoints}.";

}
