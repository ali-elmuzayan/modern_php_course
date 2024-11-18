<?php

// XSS
/*
 * why we need prevent cross site scripting
 *  - cause malicious user could add code tht destroy or hurt  our project
 *      so we need to
 *  - try this to know what is going to happen
 *      => "/><script>alert('hi')</script>
 *
 * how to prevent this and protect our project
 *  - by using htmlspecialchars()
 *      - which will converts some predefined characters to Html entities
 *      - & => &amp
 *      - " => &quot
 *      - ' => #039
 *      - < => &lt
 *      - > => &gt
 *
 *
 * use it with output come from form or with any output
 *      => always use it with dynamic output
 *      => always use it even if it not necessary
 */
/*
 * because this always forgotten
 * we are going to create function that handle this
 * like
 */
// function that handle the output
function hHtml($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


$firstname = !empty($_POST["firstname"]) ?
    htmlspecialchars($_POST["firstname"], ENT_QUOTES, 'UTF-8') : null;;

?>
<h1><?= hHtml($firstname) ?></h1>

<form method="Post">
    <input type="text" name="firstname" value="<?= hHtml($firstname); ?>">
    <input type="submit" value="Submit!">
</form>