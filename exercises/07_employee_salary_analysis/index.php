<?php
include_once __DIR__ . '/helpers.php';


// Scenario background
/*
 * part 1:
 * -------
 *  Embark on a challenge to navigate the complex financial landscapes
 *  of a company's salary expenditures. With employees dispersed across
 *  various departments, each making unique contributions to the
 *  company's success, your mission is to efficiently analyze and manage
 *  these financial records. 💼📊
 *
 *
 * part 2:
 * -------
 * Continue your journey through the intricate financial landscapes of
 * a company's salary structure. Employees, spanning across diverse
 * departments, contribute uniquely towards the company’s prosperity.
 * Your next mission is to delve deeper into these financial records,
 * unearthing insights that extend beyond departmental boundaries. 💼📊
 *
 *
 * part 3:
 * -------
 * Advance into the deeper intricacies of financial management within the
 * company's ecosystem. Armed with the comprehensive salary data across
 * all departments consolidated into the $companySalaries array, embark
 * on a mission to optimize salary expenditures with strategic adjustments.
 * Your analytical skills will play a pivotal role in balancing the scales
 * of financial fairness and operational efficiency. 💼📊
 *
 *
 * NOTE:
 *      - all the data is provided in helpers file
 */

echo '<pre>';


// total value and highest salary
echo '<h3> The total salaries in each department </h3>';
echo '<ul>';
foreach ($totals as $key => $salary) {
    echo '<li>' . $key . ' => ' . $salary . '</li>';
}
echo '</ul>';
echo 'The highes salary is in <strong>"' . $highestSalary . '"</strong> department </strong><br>';
echo '<br> ';
echo '<hr>';

// part 2: the lowest salary
echo "<h3>The Lowest Salaries </h3>";
echo "<ul>";
foreach ($lowestSalaries as $key => $salary) {
    echo '<li>' . $key . ' => ' . $salary . '</li>';
}
echo "</ul>";
echo "</br>";
echo "<hr>";

echo "<h3>The Company Salaries </h3>";
echo "<ul>";
foreach ($companySalaries as $key => $salary) {
    echo '<li>' . $key . ' => ' . $salary . '</li>';
}
echo "</ul>";
echo "</br>";
echo "<hr>";


// part 3: all the functionality exists in the (helpers file) part 3 section ;
//-----------------------------------------------------------------------------
// Task 3: Output the Financial Impact
if ($financialImpact >= 0) {
    echo "The net impact of the salary adjustments is a cost increase of $" . $financialImpact . " for the company.";
} else {
    $financialImpact = -$financialImpact;
    echo "The net impact of the salary adjustments is a savings of $" . $financialImpact . " for the company.";
}


// you can skip that because we sorted it before working on it
// another solvation if it is not sorted
$lowestSalaryValue = null;
$lowestSalaries = [];
foreach ($companySalaries as $name => $salary) {
    // If lowestSalaryValue is not set or current salary is lower
    // than the lowestSalaryValue
    if ($lowestSalaryValue === null || $salary < $lowestSalaryValue) {
        $lowestSalaryValue = $salary; // Update the lowest salary value
        $lowestSalaries = [$name => $salary]; // Reset and start a new array with the current lowest salary
    } else if ($salary === $lowestSalaryValue) {
        $lowestSalaries[$name] = $salary; // Add the current salary if it matches the lowestSalaryValue
    }
}