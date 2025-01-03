<?php

require_once __DIR__ . '/index.php';
// Background Scenario:
/*
 * - Building on your foundation in forecasting energy consumption,
 *   we now shift our focus to a critical aspect of sustainability
 *   and financial planning.  With the ongoing expansion and drive
 *   towards energy efficiency,
 *   the task at hand is to predict
 *   how many months it will take for the total energy consumption
 *   to reach or exceed a specified capacity threshold, ensuring
 *   the company can implement strategies to mitigate potential
 *   financial impacts in advance. 🏭⚡️
 */


// current energy consumption in kWh
$totalEnergyConsumption = 10000;

// expected monthly increase
$monthlyIncrease = 500;

// efficiency improvement factor per month
$efficiencyImprovement = 0.0005;

// The energy consumption threshold that must not be exceeded
$energyCapacityThreshold = 150000;


// Instructions
/*-------------
 *
 * 1) Calculate Time to threshold:
 *    - Calculate how many months it will take for the total energy
 *      consumption to reach or exceed the energy capacity threshold.
 *      For each iteration (representing a month), apply the monthly
 *      increase and efficiency improvement to the total energy
 *      consumption.
 *      **
 *      Reminder from Part 1: The monthly calculation involved adding
 *      the monthlyIncrease to the totalEnergyConsumption and then
 *      multiplying by (1 - efficiencyImprovement) to factor in
 *      **
 *      Avoid Endless Loops: Be cautious of creating loops that could
 *      potentially run indefinitely! Should the number of months required
 *      to reach the threshold extend beyond 50 years, halt the forecast
 *      process!
 *
 * 2) Display the result:
 */

$months = 0; // Initialize counter for months.

// Loop to forecast when energy consumption will reach or exceed the threshold
while ($totalEnergyConsumption < $energyCapacityThreshold && $months < 12 * 50) { // Limit to 50 years
    $totalEnergyConsumption += $monthlyIncrease; // Add monthly increase.
    $totalEnergyConsumption *= (1 - $efficiencyImprovement); // Apply efficiency improvement.
    $months++; // Increment month counter.
}


// Display the result based on the forecast
if ($months >= 600) {
    // Output message if the threshold is not met within 50 years
    echo "The energy consumption threshold of $energyCapacityThreshold kWh will not be met within 50 years.";
} else {
    // Output message indicating the number of months needed to meet the threshold
    echo "It will take $months months to reach or exceed the threshold of $energyCapacityThreshold kWh.";
}
