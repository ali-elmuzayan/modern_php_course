<?php
//overview
/*
 * we will explore URL parameters and forms
 * This will allow our php files to "react" to user input
 * We will also explore how you can do this securely
 *      => cross-site scripting(XSS)
 */


// short if statement
$name = "Ali";
$name = strtolower($name);
//echo ($name = 'ali' ? "The name is: Ali" : "The name isn't Ali, is $name " );
$text = ($name === 'ali' ? "The name is: Ali" : "The name isn't Ali, is $name ");
echo $text;


// retrieve user input from the URL:
/*
 * parameter
 *  => localhost/index.php?book=harry Potter
 * multiple parameter
 *  => localhost/index.php?book=harry Potter&author= JRR Tolkien
 * array
 *  => localhost/index.php?books[]=harry Potter&books[]=Romio julie
 * ignore "&" if we want to add it as value
 *  => http_build_query()
 *  => or use %26
 *
 * always use http_build_query
 *      - works with all value
 *      - works with different browser to avoid potential problem
 *      - you can add multiple parameter ["" => "", "" => "", "" => ""]
 *
 * how to access this parameter
 *   => $_GET
 *      which is built by php
 *      this array is always exist but it will be null if there is no value
 *      that is way we need to check if there is a value before accessing it
 *
 */
$params = ['book' => 'beaut & the beast',
    'author' => 'ahmed saad'];
$params_2 = ['books' => ['beauty & the beast', 'Rich dad & poor dad']];
$query = http_build_query($params_2);
$url = "01_retrieve_user_input_from_the_url.php?$query";
?>
    <a href="<?php echo $url ?>">Beauty & the beast</a>
<?php

if (isset($_GET)) {
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
}

