<?php

// part 1 section:
// --------------
$hrSalaries = ['Alice' => 5000, 'Bob' => 6000, 'Charlie' => 5500];
$salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
$itSalaries = ['Fiona' => 5300, 'George' => 4800, 'Hannah' => 5900, 'Ivan' => 6400];


$hrTotals = array_sum($hrSalaries);
$salesTotals = array_sum($salesSalaries);
$itTotals = array_sum($itSalaries);

$totals = [
    'HR' => $hrTotals,
    'Sales' => $salesTotals,
    'IT' => $itTotals
];
$highestSalary = array_search(max($totals), $totals);


// part 2 section:
// ---------------
// all the company employee's salaries
$companySalaries = array_merge($hrSalaries, $salesSalaries, $itSalaries);


asort($companySalaries);
$lowestSalary = 0;
$lowestSalaries = [];
foreach ($companySalaries as $employee => $salary) {
    if ($lowestSalary == 0) {
        $lowestSalary = $salary;
    }
    if ($lowestSalary < $salary) {
        break;
    }
    $lowestSalaries[$employee] = $salary;
}


// part 3 sections:
// Task 1: Compute the Average Salary
$averageSalary = array_sum($companySalaries) / count($companySalaries);

// Task 2: Adjust Salary Records and Track Financial Impact
$financialImpact = 0;
foreach ($companySalaries as $name => $salary) {
    if ($salary < $averageSalary) {
        // Apply a $200 raise for those below the average
        $raiseAmount = 200;
        $companySalaries[$name] += $raiseAmount;
        $financialImpact += $raiseAmount; // Increase in cost
    } else if ($salary > $averageSalary) {
        // Reduce salary by 5% for those above the average
        $reductionAmount = $salary * 0.05;
        $companySalaries[$name] -= $reductionAmount;
        $financialImpact -= $reductionAmount; // Savings
    }
}
