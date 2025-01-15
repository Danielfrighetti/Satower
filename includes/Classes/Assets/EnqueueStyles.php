<?php

namespace SatowerAcademy\Classes\Assets;

class EnqueueStyles
{
    public static function init()
    {
        add_action('wp_enqueue_scripts', [__CLASS__, 'loadStyles']);
    }


    public static function loadStyles()
    {
        wp_enqueue_style(
            'satower_academy-style',
            get_template_directory_uri() . '/dist/style.css',
            [],
            '1.0'
        );
    }
}
