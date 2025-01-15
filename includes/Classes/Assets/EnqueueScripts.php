<?php

namespace SatowerAcademy\Classes\Assets;

use SatowerAcademy\Classes\Managers\SEOManager;

class EnqueueScripts
{
    public static function init()
    {
        add_action('wp_enqueue_scripts', [__CLASS__, 'loadScripts']);
        add_action('wp_head', [__CLASS__, 'applySEO'], 1);
    }


    public static function loadScripts()
    {
        // wp_enqueue_script(
        //     'satower_academy-scripts',
        //     get_template_directory_uri() . '/dist/scripts.js',
        //     [],
        //     '1.0',
        //     true
        // );
    }

    public static function applySEO()
    {
        SEOManager::applySEO();
        add_action('wp_head', 'add_seo_to_head', 1);
    }
}
