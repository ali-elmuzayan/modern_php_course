<?php


function e($str)
{
    return htmlspecialChars($str, ENT_QUOTES, 'UTF-8');
}

function current_url()
{
    $sections = explode('/', $_SERVER['PHP_SELF']);
    return end($sections);
}


function isActivePage($str)
{
    if ($str == current_url()) return 'active';
    
}

