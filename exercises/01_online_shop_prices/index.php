<?php
$price = 50;
/*
 * scenario:
 *  Imagine you are developing a feature for an online shop that dynamically
 *  adjusts item prices based on discounts and taxes, and also calculates
 *  loyalty points based on the final price. 🛍️
 */

// instructions:
/*
 * 1) Apply a 30% percentage discount to the value in the given variable
 *   $price first
 *
 * 2) Apply a flat discount of $10 to the price after the percentage
 *    discount
 *
 * 3) Add a 20% tax to the price after applying both discounts
 *
 * 4) Calculate the loyalty points earned for the final price
 *     - Every cent spent earns 1 loyalty point; $1 is then
 *       equivalent to 100 loyalty point
 *
 */


$priceWithDiscount = $price - ($price * 0.3);

$newPrice = $priceWithDiscount - 10;

$priceWithTax = $newPrice * 1.2;

// loyalty points
$loyaltyPoints = $priceWithTax * 100;


echo "After applying discounts and taxes, the item's price is reduced from \${$price} to \${$priceWithTax}, and you've earned {$loyaltyPoints} loyalty points.";