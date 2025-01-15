<?php
require_once "vendor/autoload.php";

use SatowerAcademy\Classes\Assets\EnqueueScripts;
use SatowerAcademy\Classes\Assets\EnqueueStyles;
use SatowerAcademy\Classes\PostTypes\CoursePostType;
use SatowerAcademy\Functions\AjaxManager;

EnqueueScripts::init();
EnqueueStyles::init();
CoursePostType::init();
AjaxManager::init();
