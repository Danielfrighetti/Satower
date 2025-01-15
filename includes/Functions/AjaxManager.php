<?php

namespace  SatowerAcademy\Functions;

use SatowerAcademy\Classes\Managers\CourseManager;

class AjaxManager
{
    private static $initialized = false;

    public static function init()
    {
        if (!self::$initialized) {
            self::$initialized = true;

            $course_class = new CourseManager();

            self::registerAjaxFunctions($course_class);
        } else {
            return;
        }
    }

    private static function registerAjaxFunctions($class)
    {
        $methods_ajax = get_class_methods($class);

        foreach ($methods_ajax as $method) {
            add_action("wp_ajax_$method", [$class, $method]);
            add_action("wp_ajax_nopriv_$method", [$class, $method]);
        }
    }
}
