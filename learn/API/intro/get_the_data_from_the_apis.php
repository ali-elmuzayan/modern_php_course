<?php
//Using JavaScript
/*
 * there is a multiple a way to get the data from the api
 * - fetch() // select the path of the apis
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script>
    fetch("http://modern_php_course.test/projects/procedural_programming/09_learn_api_by_app/").then(response => response.json()).then(data => {
        console.log(data);
    })
</script>
</body>
</html>
