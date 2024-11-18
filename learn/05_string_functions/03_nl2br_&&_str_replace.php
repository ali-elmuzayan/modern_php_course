<?php
/*
 * nl2br
 *
 */

// str_replace
/*
 * A function returns a new string with all occurrences of a substring
 *      replaced with another string
 *
 * syntax:
 *  str_replace (
    array|string $search ,
    array|string $replace ,
    string|array $subject ,
    int &$count = null
) : string|array

 *
 * Note:
 *  - you can use the function with multiple replacements
 *      str_replace(['fox', 'dog'], ['wold', 'cat'], $var)
 *
 *  - it is create a copy which mean will not affect the original string
 */

// str_ireplace()
/*
 * to search for a string case-insensitively and replace it with
 *   a replacement string,
 */
$text = "PHP, short for \"Hypertext Preprocessor\", is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.\nPHP is designed with a syntax that many find user-friendly, although the ease of learning can be subjective and vary from person to person. The language allows for efficient coding; tasks like outputting text can be performed with simple commands like echo. Variables are easily declared, and PHP offers a comprehensive set of control structures, including conditional statements and loops, providing a balance between simplicity and functionality.\nWhile PHP is most commonly used for server-side web development, its capabilities extend beyond that scope. The language has evolved to include command-line scripting and even the creation of desktop applications. However, its primary utility remains in server-side scripting, making it a robust and flexible choice for everything from small websites to complex web-based applications.";

// note if you use it like this
echo htmlspecialchars(nl2br("PHP \n is amazing"));
echo "<br>";
// str_replace
$str = 'hello world! we are here to help you.';
echo str_replace('h', 'H', $str);
echo "<br>";
echo $str;
echo "<br>";
echo '<hr>';
echo '<br>';

// convert the text to paragraph by converting line breaks into </p><p>

echo '<p>';
echo str_replace("\n", "</p><p>", $text);
echo '</p>';

echo '<hr>';


