<?php
use JetBrains\PhpStorm\NoReturn;

/**
 * @author Julius Derigs <derigs@kutzner-beratung.com>
 * @version 1.0
 */

if (!function_exists('base_url')) {
    /**
     * @param string $uri
     * @return string
     */
    function base_url(string $uri = '') :string {
        return BASE_URL . $uri;
    }
}

if (!function_exists('redirect')) {
    /**
     * @param string $url
     * @return void
     */
    #[NoReturn] function redirect(string $url) :void {
        header('Location: ' . $url);
        exit;
    }
}