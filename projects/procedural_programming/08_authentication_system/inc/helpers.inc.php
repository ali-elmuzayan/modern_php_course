<?php


// for the debugging
function dd($value): void
{
    echo '<div style="border: 1px solid black; padding: 10px; margin: 10px;">';
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    echo '</div>';
    die();
}

// to protect the output from xsrf attraction
function html(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// to redirect the request
function redirect(string $location): void
{
    header('Location: ' . $location . 'php');
}

// old return the old value if it set
function old(string $value, string $default = ''): string
{
    // check the get request first
    $value = filter_input(INPUT_GET, $value, FILTER_SANITIZE_STRING);
    if (!empty($value)) {
        return $value;
    }

    // check the POST request
    $value = filter_input(INPUT_POST, $value, FILTER_SANITIZE_STRING);
    if (!empty($value)) {
        return $value;
    }
    return $default;
}

// this function will look for variable called extends
// which will use to extends from the file in the views/layout
// if the variable is not extends so by default will extend from the main
function render(string $view, array $data = [])
{

    global $extends;
    if (empty($extends)) {
        $extends = 'main';
    }
    if (!empty($data)) {
        extract($data);
    }
    ob_start();
    require __DIR__ . '/../views/main/' . $view . '.view.php';

    $content = ob_get_clean();

    require __DIR__ . '/../views/layout/' . $extends . '.view.php';
}