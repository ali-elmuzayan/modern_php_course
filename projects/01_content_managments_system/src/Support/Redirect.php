<?php

namespace App\Support;

use JetBrains\PhpStorm\NoReturn;

class Redirect
{
    /**
     * Redirect ot a specific URL.
     *
     * @param string $url The URL to redirect to: void
     * @return void
     */

    #[NoReturn]
    public static function to(string $url): void
    {
        header('Location: ' . $url);
        exit;
    }

    /**
     * Redirect to a specified URL with query parameters.
     *
     * @param string $url The base URL to redirect to.
     * @param array $parameters An associative array of query parameters.
     * @return void
     */
    #[NoReturn]
    public static function withParams(string $url, array $parameters): void
    {
        $query = http_build_query($parameters);
        self::to($url . '&' . $query);
    }


    /**
     * Redirect to a specified URL with a flash message.
     *
     * @param string $url The URL to redirect to.
     * @param string $name The name of the flash message.
     * @param string $message The flash message text.
     * @param string $type The type of flash message (error, warning, info, success).
     * @return void
     */
    #[NoReturn]
    public static function withFlashMessage(array|string $url, string $name, string $message, string $type = Flash::FLASH_SUCCESS): void
    {

        if (is_array($url)) {
            $new_url = $url[0];
            unset($url[0]);
            $params = $url;


            Flash::flash($name, $message, $type);
            self::withParams($new_url, $params);
        }

        Flash::flash($name, $message, $type);
        self::to($url);
    }

}