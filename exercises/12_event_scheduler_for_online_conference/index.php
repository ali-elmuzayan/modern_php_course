<?php
declare(strict_types=1);

// Background Scenario
/*
 * You are part of a team organizing an international online conference.
 * To ensure the event runs smoothly, it's crucial to schedule sessions
 * at times that work across multiple time zones. Your task is to help
 * create a scheduling tool that calculates the best meeting times,
 * considering the diverse locations of all participants. 🌍🕒
 */

// function requirements:
/*
 * 1) calculateTimeOverlap(): Accepts the UTC time zone offsets of two
 *    participants and calculates the overlap in their preferred meeting
 *    time window
 * 2) suggestOptimalMeetingTime(): Utilizes the overlap calculated by
 *    calculateTimeOverlap to suggest a meeting time
 */


// Additional helper function
function addOffset($hour, $offset)
{
    return $hour + $offset;
}

function calculateTimeOverlap($offset1, $offset2)
{
    // Common meeting hours in UTC (12 PM to 6 PM converted to 24-hour format)
    $startHourUTC = 12;
    $endHourUTC = 18;

    // Adjust start and end hours for both time zones using addOffset
    $start1 = addOffset($startHourUTC, $offset1);
    $end1 = addOffset($endHourUTC, $offset1);
    $start2 = addOffset($startHourUTC, $offset2);
    $end2 = addOffset($endHourUTC, $offset2);

    // Calculate overlap
    $overlapStart = $start1 > $start2 ? $start1 : $start2;
    $overlapEnd = $end1 < $end2 ? $end1 : $end2;

    // Check if there's an overlap
    return $overlapStart < $overlapEnd ? [$overlapStart, $overlapEnd] : [];
}

function suggestOptimalMeetingTime($offset1, $offset2)
{
    $overlap = calculateTimeOverlap($offset1, $offset2);

    if (empty($overlap)) {
        echo 'No available meeting time for these time zones.';
    } else {
        // Suggesting the start of the overlap as meeting time
        echo 'Suggested meeting time: ' . $overlap[0] . ' to ' . $overlap[1] . ' UTC';
    }
}