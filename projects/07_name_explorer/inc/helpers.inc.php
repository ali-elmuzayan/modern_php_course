<?php
function dd($value)
{

    echo '<div style="background-color: rgb(200,200,200); color: #113343; font-size: 16px; width: 92%;margin: 10px auto; padding: 0.5rem">';
    echo '<pre>';
    var_dump($value);
    echo '</pre></div>';
    die();
}

// for xsrf
function html($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function genAlphabet(): array
{
    $A = ord("A");
    $Z = ord("Z");

    for ($i = $A; $i <= $Z; $i++) {
        $alphabet[] = chr($i);
    }
    return $alphabet;
}


// render
function render($view, array $params = [])
{
    extract($params);

    ob_start();
    require_once __DIR__ . '/../views/pages/' . $view . '.php';
    $content = ob_get_clean();
    require_once __DIR__ . '/../views/layouts/main.view.php';
}