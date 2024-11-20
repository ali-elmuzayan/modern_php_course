<?php
include_once __DIR__ . "/inc/functions.inc.php";

// Background Scenario:
/*
 * You're in charge of managing the attendance for an upcoming workshop.
 * The interest in your workshop has exceeded capacity, leading to a
 * challenging yet essential task: organizing the attendee list effectively.
 * You're provided with two arrays containing the names of those interested
 * and those requesting removals. Your goal is to streamline the attendance process, ensuring fairness and priority where due.
 *
 *
 */

$waitingList = [
    'Alex Reed',
    'Blake Jordan',
    'Casey Smith',
    'Drew Alex',
    'Elliot Ford',
    'Finley Harper',
    'Jordan Kay',
    'Kim Lee',
    'Liam Park',
    'Morgan Drew'
];

$priorityParticipants = [
    'Jordan Kay', // In the waiting list and has priority
    'Sam Taylor', // Not in the waiting list but has priority
    'Zane Pryor'  // Not in the waiting list but has priority
];

$removeFromList = ['Dawn White', 'Charlie Davis'];


$cleanList = array_unique($waitingList);

$cleanedList = removeFromList($waitingList, $removeFromList);

sort($waitingList);
?>

<ul>
    <?php foreach ($waitingList as $item) : ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>
<hr>

<ul>
    <?php foreach ($cleanList as $item) : ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>
