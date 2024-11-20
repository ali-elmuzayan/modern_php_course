<?php


// this function will remove what is diff in the array
// do the same functionality of array_diff
function removeFromList($list, $itemsToRemove)
{
    $newList = [];
    foreach ($list as $item) {
        if (in_array($item, $itemsToRemove)) continue;
        $newList[] = $item;
    }
    return $newList;
}