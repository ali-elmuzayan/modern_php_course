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
function html($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


function old(string $value) :?string {
    if(!empty($_POST[$value])) {
        return html($_POST[$value]);
    }
    return '';
}

// to redirect the user
//function redirect(string $route) :void {
//    header('location: index.php?route='. $route);
//    exit;
//}
