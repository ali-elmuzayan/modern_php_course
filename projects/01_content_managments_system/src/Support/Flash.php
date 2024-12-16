<?php

namespace App\Support;

class Flash
{
    public const FLASH = 'FLASH_MESSAGES';

    public const FLASH_ERROR = 'error';
    public const FLASH_WARNING = 'warning';
    public const FLASH_INFO = 'info';
    public const FLASH_SUCCESS = 'success';

    /**
     * Central flash method to handle creating and displaying messages.
     *
     * @param string|null $name Flash message name (for create or display).
     * @param string|null $message Message content (used when creating a flash message).
     * @param string|null $type Type of the flash message (error, warning, info, success).
     * @return void
     */
    public static function flash(?string $name = null, ?string $message = null, ?string $type = null): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        // If all parameters are null, display all flash messages
        if ($name === null && $message === null && $type === null) {
            self::displayAll();
            return;
        }

        // If only the name is provided, display a specific message
        if ($name !== null && $message === null && $type === null) {
            self::display($name);
            return;
        }

        // If all three parameters are provided, create a flash message
        if ($name !== null && $message !== null && $type !== null) {
            self::create($name, $message, $type);
            return;
        }

        // If parameters don't match valid combinations, throw an exception
        throw new \InvalidArgumentException(
            'Invalid arguments provided to flash method. Use (name, message, type) to create, (name) to display one, or no arguments to display all.'
        );
    }

    /**
     * Create a flash message.
     *
     * @param string $name
     * @param string $message
     * @param string $type
     * @return void
     */
    public static function create(string $name, string $message, string $type): void
    {
        $_SESSION[self::FLASH][$name] = [
            'message' => $message,
            'type' => $type,
        ];
    }

    /**
     * Display a specific flash message.
     *
     * @param string $name
     * @return void
     */
    public static function display(string $name): void
    {
        if (isset($_SESSION[self::FLASH][$name])) {
            echo self::format($_SESSION[self::FLASH][$name]);
            unset($_SESSION[self::FLASH][$name]);
        }
    }

    /**
     * Display all flash messages.
     *
     * @return void
     */
    public static function displayAll(): void
    {
        if (isset($_SESSION[self::FLASH])) {
            foreach ($_SESSION[self::FLASH] as $flashMessage) {
                echo self::format($flashMessage);
            }
            unset($_SESSION[self::FLASH]);
        }
    }

    /**
     * Format a flash message.
     *
     * @param array $flashMessage
     * @return string
     */
    private static function format(array $flashMessage): string
    {
        return sprintf(
            '<div class="alert alert-%s">%s</div>',
            htmlspecialchars($flashMessage['type'], ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($flashMessage['message'], ENT_QUOTES, 'UTF-8')
        );
    }
}
