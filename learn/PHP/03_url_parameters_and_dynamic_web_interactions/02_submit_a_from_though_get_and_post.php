<?php


// form
/*
 * action => to submit the value into the same file or other file
 * method => to determine the method of the form
 *
 * you need to have in your form:
 *  - a submit button to submit to transfer the value to the server
 *      => type = submit
 */

// get
/*
 * when the method of the form is get and the user click on submit
 *      => that mean the data will transfer as a get parameter in the url
 *          as a query parameters
 * get information
 * purpose       => retrieve data from the server
 * data location => URL
 * Data Size     => Limited (around 2000 characters)
 * Security      => Less secure
 * Caching       => Often cached  (making them more efficient for repeated requests
 * Idempotency   => yes (safe, doesn't affect server)
 */


?>
    <form action="02_submit_a_from_though_get_and_post.php" method="get">
        <label for="book">book name:</label>
        <input type="text" name="book" id="book" value="<?php echo old('book') ?>">
        <input type="submit" value="Submit!">
    </form>

<?php
// post
/*
 * $_POST => built in array that is always exist and contain post data
 *
 * Note:
 *      - and if you reset the page the browser will ask you
 *        to ensure this action
 *
 *
 * information
 * Purpose       => submits data to the server
 * Data Location => Request body
 * Data size     => Larger (depends on server limits)
 * Security      => More secure
 * Caching       => Typically not cached
 * Idempotency   => No (may have side effects)
 *
 */


// this helpful function
function old($parameter)
{
    if (!empty($_REQUEST[$parameter]))
        return $_REQUEST[$parameter];
}
