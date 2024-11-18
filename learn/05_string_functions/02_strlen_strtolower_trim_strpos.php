<?php
//  string functions:
/*
 *  - strlen
 *  - substr(value, offset, length)
 *      => length by default the to the end
 *
 *  - str_starts_with
 *      => to check if it starts with that or not
 *
 *  - str_ends_with(stringVar , value)
 *      => check fi it end with that string
 *
 *  - strtoupper(string)
 *      => convert the whole string to upper case
 *
 *  - strtolower(string)
 *      => covert the whole string to lower case
 *
 *  - ucfirst(string)
 *      => turn the first letter to uppercase
 *
 *  - trim()
 *      => will remove the whitespace at the beginning and at the end
 *      => or you can specify what to move at the beginning and at the end
 *
 *  - rtrim() and ltrim()
 *      => remove from the right side and remove from the left side
 *
 *  - strpos()
 *      => locate the first occurrence of a substring in a string
 *      => return s the index of the first occurrence of a substring within
 *          a string
 *      => syntax:
 *         strpos ( string $haystack , string $needle , int $offset = 0 )
 *
 */
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<pre>
    <?php

    $text = "PHP, short for \"Hypertext Preprocessor\", is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.\nPHP is designed with a syntax that many find user-friendly, although the ease of learning can be subjective and vary from person to person. The language allows for efficient coding; tasks like outputting text can be performed with simple commands like echo. Variables are easily declared, and PHP offers a comprehensive set of control structures, including conditional statements and loops, providing a balance between simplicity and functionality.\nWhile PHP is most commonly used for server-side web development, its capabilities extend beyond that scope. The language has evolved to include command-line scripting and even the creation of desktop applications. However, its primary utility remains in server-side scripting, making it a robust and flexible choice for everything from small websites to complex web-based applications.";
    //    var_dump(substr($text, 1));
    ?>
</pre>

<p>
    <strong><?= htmlspecialchars(substr($text, 0, 1)); ?></strong><?php echo htmlspecialchars(substr($text, 1), ENT_QUOTES, 'UTF-8'); ?>

</p>
<hr>
<p>get the length of the character using strlen() : <?= strlen($text) ?> </p>
<p>note that: <br> - it is technical count the number of bytes </p>
</body>
</html>