<?php

// Background Scenario:
/*
 * - A leading industrial company is focusing on sustainable growth by
 *   monitoring and optimizing its energy consumption amidst rapid
 *   expansion. Your task is to create a forecast model that predicts
 *   energy consumption over the next years, considering both the
 *   expected increase from operational scaling and the targeted decrease
 *   from implementing energy-efficiency initiatives. 🏭⚡️
 */

// starting energy consumption in kWh, reflecting the initial industry scale
$totalEnergyConsumption = 50000;

// Expected monthly increase in kWh due to expansion and new machinery
$monthlyIncrease = 200;

// enhance efficiency measures aiming for a higher reduction in energy
// growth rate
$efficiencyImprovement = 0.001;

// Forecast period
$years = 5;

$forecastedEnergyConsumption = 0;


// IInstructions:
/*----------------
 * - Your goal is to calculate the forecasted total energy consumption
 *   over the specified period, taking into account both the increase
 *   from new developments and the decrease from efficiency improvements.
 *   Follow these steps for your calculation:
 *
 * 1) Monthly increase:
 *   -  For each month, begin by adding the specified monthly increase
 *      in energy consumption due to new developments.
 *
 * 2) Efficiency Improvement
 *   - After accounting for the increase, apply the efficiency improvement
 *     factor to slightly reduce the total energy consumption, reflecting
 *     the company's efforts to become more energy efficient.
 *
 * 3) Repeat for every month of the given years:
 *   - Perform these calculations sequentially for each month across the
 *     entire forecast period.
 *
 * 4) Save the forecast:
 *   - Store the final forecasted energy consumption value in a variable
 *     named '$forecastedEnergyConsumption'. This will represent the
 *     cumulative effect of both expansion and efficiency initiatives on
 *     the company's energy consumption over the forecast period.
 *
 * Note:
 *  - Ensure to round this value to two decimal places for precision in
 *    your results
 *
 */

//---------------
// the solution
//---------------

// Variable to store the forecasted energy consumption after calculations
$forecastedEnergyConsumption = $totalEnergyConsumption;

$months = 12 * $years;
// Loop through each month of the given years
for ($month = 1; $month <= $months; $month++) {
    // Add the monthly increase in energy consumption due to new developments
    $forecastedEnergyConsumption += $monthlyIncrease;

    // Apply the efficiency improvement factor to reduce the total energy consumption
    $forecastedEnergyConsumption *= (1 - $efficiencyImprovement);
    echo $forecastedEnergyConsumption . "\n";
}

// Round the final forecasted energy consumption value to two decimal places
$forecastedEnergyConsumption = round($forecastedEnergyConsumption, 2);
echo $forecastedEnergyConsumption . "\n";