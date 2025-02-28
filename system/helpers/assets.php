<?php
if (!function_exists('load_assets_from_config')) {
    function load_assets_from_config() :void {
        $assets = require dirname(__DIR__, 2) . '/config/assets.php';

        foreach ($assets['css'] as $key => $value) {
            foreach ($value as $k => $v) {
                echo '<link rel="stylesheet" href="' . $v . '" ';
                if ($k === 'integrity') {
                    echo 'integrity="' . $value['integrity'] . '" ';
                }
                if ($k === 'crossorigin') {
                    echo 'crossorigin="' . $value['crossorigin'] . '" ';
                }
                echo '/>';
            }
        }

        foreach ($assets['js'] as $key => $value) {
            foreach ($value as $k => $v) {
                echo '<script src="' . $v . '" ';
                if ($k === 'integrity') {
                    echo 'integrity="' . $value['integrity'] . '" ';
                }
                if ($k === 'crossorigin') {
                    echo 'crossorigin="' . $value['crossorigin'] . '" ';
                }
                echo '></script>';
            }
        }
    }
}