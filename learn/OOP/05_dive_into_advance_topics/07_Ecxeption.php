<?php

class UserNotAdminException extends Exception
{
}

class TitleTooShortException extends Exception
{
}

function edit_page($user, $title)
{
    if ($user !== 'admin') {
        throw new UserNotAdminException('The user is not admin');
    }
    if (strlen($title) < 2) {
        throw new TitleTooShortException('The title is too short.');
    }
    return $title;
}

try {
    edit_page('admin', 'd');
} catch (UserNotAdminException|TitleTooShortException $e) {
    echo $e->getMessage();
} finally {
    echo 'always work';
}
