<?php
include_once __DIR__ . '/inc/functions.inc.php';

$city = null;
$filename = null;
if (!empty($_GET['city'])) {
    $city = $_GET['city'];
}

if (!empty($city)) {
    $cities = json_decode(
        file_get_contents(__DIR__ . '/data/index.json'), true
    );
    foreach ($cities as $value) {
        if ($value['city'] === $city) {
            $city = $value;
            $filename = $value['filename'];
            break;
        }
    }

}

if (!empty($filename)) {
    $results = json_decode(file_get_contents('compress.bzip2://' . __DIR__ . '/data/' . $filename), true)['results'];
    $stats = [];
    $stats2 = [];

    foreach ($results as $result) {
        if ($result['parameter'] !== 'pm25') continue;
        if ($result['value'] < 0) continue;

        $month = substr($result['date']['local'], 0, 7);
        if (!isset($stats[$month])) $stats[$month] = [];
        $stats[$month][] = $result['value'];
    }

    foreach ($results as $result) {
        if ($result['parameter'] === 'pm25' || $result['parameter'] === 'pm10') {
            $month = substr($result['date']['local'], 0, 7);
            $stats2[$month][$result['parameter']][] = $result['value'];
        }

    }
}


// var_dump($stats);
include_once __DIR__ . '/views/header.inc.php';
?>

    <!-- in case there value doesn't uploaded rightly show this message -->
<?php if ($city == null) : ?>
    <p>The city could not be loaded</p>

    <!-- otherwise we will check the stats variable if it exist or not-->
<?php else : ?>
    <?php if (isset($stats)) : ?>
        <table>
            <!-- loop on the stats to show each month and the avg of the data -->
            <?php foreach ($stats as $month => $measurements) : ?>
                <tr>
                    <th><?= $month ?></th>
                    <td><?= round(array_sum($measurements) / count($measurements), 2) ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

        <!--    if stats variable not set show this message-->
    <?php else: ?>
        <p>the city is loaded </p>
    <?php endif; ?>
<?php endif; ?>

<?php
include_once __DIR__ . '/views/footer.inc.php';



