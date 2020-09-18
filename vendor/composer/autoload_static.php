<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit796e43f0021d66c346e2ec09fca204c1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit796e43f0021d66c346e2ec09fca204c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit796e43f0021d66c346e2ec09fca204c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit796e43f0021d66c346e2ec09fca204c1::$classMap;

        }, null, ClassLoader::class);
    }
}
