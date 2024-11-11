<?php
include_once __DIR__ . "/header.php";
include_once __DIR__ . "/inc/helper.php";
$pages = [
    'citrus_salmon' => 'Citrus Symphony Salmon',
    'marvel_pasta' => 'Mediterranean Marvel Pasta',
    'sunset_risto' => 'Sunset Risotto',
    'tango_tacos' => 'Tango Tacos Tacos',
];

?>

    <form action="" method="get">

        <label for="recipe" class="form-label ">Choose The dish</label>
        <div class="row">
            <div class="col-8">
                <select name="page" id="recipe" class="form-select">
                    <?php foreach ($pages as $page => $title): ?>
                        <option value="<?= html($page) ?>" <?= select('page', $page) ?>><?= html($title) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" value="Submit!" class="btn btn-primary col-4">
        </div>
    </form>

<?php


// to check if it is in array that has key and value
/*
$pages_keys = array_keys($pages);
use in_array to check
*/
if (isset($_GET['page'])) {
    $page = $_GET['page'];
//    include_once __DIR__ . "/recipes/" . html($_GET['recipe']) . ".php";
    if (!empty($pages[$page])) {
        echo file_get_contents("recipes/{$page}.php");
    }
}

include_once __DIR__ . "/footer.php";