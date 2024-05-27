<?php
/**
 * @author Julius Derigs <derigs@kutzner-beratung.com>
 * @version 1.0
 */

if (!function_exists('esc')) {
    /**
     * @param string $string
     * @return string
     */
    function esc(string $string) :string {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}