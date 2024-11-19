<?php

// this way is my way and it is so bad look at the way he solves this problem
// or try another way


// part (1)
/*
 * Scenario:
 * --------
 *  Imagine you've been tasked with creating a loyalty rewards system for
 *   an e-commerce website. Customers earn loyalty points based on their
 *   purchase history, redeemable for discounts on future purchases. 💳🛍️
 *
 *      - Accumulating 3000 or more Loyalty Points qualifies for a 5% discount.
 *      - Accumulating 6000 or more Loyalty Points qualifies for a 15% discount.
 *      - Less than 3000 Loyalty Points results in no discount.
 *
 */


// part (2):
/*
 *
 * Instructions:
 * 2) Calculate Discounted Total: Compute the total amount after applying the eligible discount. Customers with over 6000
 *     points should be considered for both discount options!
 *
 * 3) Apply Tax: Add an 8% tax to the discounted total.
 *
 * 4)
 */


$totalCost = 20;
$loyaltyPoints = 8000;

// check if the customer has 6000 or more loyalty points
if ($loyaltyPoints > 6000) {
    // Apply a 15% discount: then add 8% tax
    $newTotalCost = $totalCost * 0.85 * 1.08;

    // Calculate new loyaltyPoints
    $newLoyaltyPoints = $newTotalCost * 100;

    // update the loyalty balance: subrract 6000 points
    $upadatedLoyaltyBalance = $loyaltyPoints + $newTotalCost - 6000;

    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$upadatedLoyaltyBalance}.";
}
// Check if the customer has 3000 or more (but less than 6000) loyalty points
if ($loyaltyPoints >= 3000) {
    // Apply a 5% discount: Multiply the total cost by 95% (0.95), then add 8% tax
    $newTotalCost = $totalCost * 0.95 * 1.08;

    // Calculate new loyalty points earned based on the discounted and taxed cost
    $newLoyaltyPoints = $newTotalCost * 100;

    // Update the loyalty balance: Subtract 3000 points spent, add new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints - 3000;

    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";

} else {
    // If the customer has fewer than 3000 loyalty points, no discount is applied
    $newTotalCost = $totalCost * 1.08; // Apply only 8% tax

    // Calculate new loyalty points earned based on the total cost with tax
    $newLoyaltyPoints = $newTotalCost * 100;

    // Update the loyalty balance by adding the new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints;

    // Display a message to the customer stating no discount and the final price
    echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
}
