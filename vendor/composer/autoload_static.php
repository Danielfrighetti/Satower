<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97b625fc2840cdb84f7465ca82664269
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SatowerAcademy\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SatowerAcademy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97b625fc2840cdb84f7465ca82664269::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97b625fc2840cdb84f7465ca82664269::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97b625fc2840cdb84f7465ca82664269::$classMap;

        }, null, ClassLoader::class);
    }
}
