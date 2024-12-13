<?php

// for debugging: var_dump();
function dump($value) :void {
    echo '<div style="border: 1px solid black; padding: 10px; margin: 10px;">';
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    echo '</div>';
}

// for debugging: var_dump() the die the script
function dd($value) :void {
    echo '<div style="border: 1px solid black; padding: 10px; margin: 10px;">';
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    echo "</div>";
    die();
}

// to protect the output from the xss
function html($value) :string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}