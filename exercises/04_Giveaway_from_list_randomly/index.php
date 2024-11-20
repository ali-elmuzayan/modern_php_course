<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Give A way Randomly</title>
</head>
<body><pre> <?php
    $names = [
        'Ali Ahmed',
        'Mohamed Fisal',
        'Ahmed Abdulmunaim',
        'Moaz Fathy',
        'Abdelrahman Marwan',
        'Nasser Ibrahim',
    ];
    $length = count($names);
    $choice = random_int(0, $length - 1);
    $theWinner = $names[$choice];
    echo "The winner is: " . $theWinner;
    ?>

</pre>
</body>
</html>