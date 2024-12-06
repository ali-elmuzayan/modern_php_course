<?php
declare(strict_types=1);

// fetch all the names that start with the character
function fetch_names_by_initial(string $char, int $page = 1, int $perPage = 15): array
{
    global $pdo;
    if ($page < 1) {
        $page = 1;
    }
    $offset = ($page - 1) * $perPage;
    $stmt = $pdo->prepare('SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :char ORDER BY `name` LIMIT :perpage OFFSET :startOF');
    $stmt->bindValue(':char', "{$char}%");
    $stmt->bindValue(':perpage', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':startOF', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $names = [];
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $result) {
        $names[] = $result['name'];
    }
    return $names;

}

// count of distinct names
function count_names_by_initial(string $char) :int {
    global $pdo;

    $stmt = $pdo->prepare('SELECT COUNT(DISTINCT `name`) AS `count` FROM `names` WHERE `name` LIKE :char;');
    $stmt->bindValue(':char', "{$char}%");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC)['count'];
}

// fetch all the data that related to this name;
function fetch_name_entries(string $name): array
{
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM `names` WHERE `name`= :name ORDER BY `year`');
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $names;
}

// generate the most popular name for the overview ;
function gen_name_overview(int $limit): array
{
    global $pdo;
    $stmt = $pdo->prepare('SELECT `name`, SUM(`count`) AS
    `sum` FROM `names`GROUP BY `name` ORDER BY `sum` DESC LIMIT :limit');
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $names;
}

function sanitize_upper_char(string $char): string
{
    // check if it is any value other than letters
    if (!preg_match('/[a-zA-Z]/', $char)) {
        return '';
    }


    if (strlen($char) > 1) {
        $char = $char[0];
    }
    return strtoupper($char);
}