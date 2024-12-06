<?php
// Constants
const FLASH = 'FLASH_MESSAGES';
const FLASH_ERROR = 'error';
const FLASH_SUCCESS = 'success';
const FLASH_INFO = 'info';
const FLASH_WARNING = 'warning';


/**
 * Create a flash message
 *
 * @param string $name
 * @param string $message
 * @param string $type
 * @return void
 */
function create_flash_message(string $name, string $message, string $type = FLASH_SUCCESS): void
{
    if (isset($_SESSION[$name])) {
        unset($_SESSION[$name]);
    }
    $_SESSION[FLASH][$name] = ['message' => $message, 'type' => $type];
}

/**
 * Format a flash message
 *
 * @param array $flash_message
 * @return string
 */
function format_flash_message(array $flash_message): string
{
    return sprintf('<div class="alert alert-%s">%s</div>', $flash_message['type'], $flash_message['message']);
}

/**
 * Display a flash message
 *
 * @param string $name
 * @return void
 */
function display_flash_messages(string $name): void
{
    if (!isset($_SESSION[$name])) {
        return;
    }

    // get message from the session
    $flash_message = $_SESSION[FLASH][$name];
    unset($_SESSION[FLASH][$name]);
    echo format_flash_message($flash_message);

}

/**
 * Display all flash messages
 * @return void
 */
function display_all_flash_messages(): void
{
    if (!isset($_SESSION[FLASH])) {
        return;
    }

    // get flash message
    $flash_messages = $_SESSION[FLASH];

    // remove all the flash messages
    unset($_SESSION[FLASH]);

    // show all flash messages
    foreach ($flash_messages as $message) {
        echo format_flash_message($message);
    }

}