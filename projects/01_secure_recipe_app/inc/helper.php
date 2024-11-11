<?php

// return old value of the input in case the user refresh the page
function old($value)
{
    if (isset($_REQUEST[$value])) {
        return $_REQUEST[$value];
    }
    return null;
}

// for xss make using htmlspecialchars much easier
function html($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


// to select the previous value for option
function select($name, $value)
{

    if (!empty($_REQUEST[$name]) && $_REQUEST[$name] === $value) {
        return 'selected';
    }
    return null;
}
