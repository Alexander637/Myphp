<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit718328e1e27fe9bfa3283f56358fde50
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
        'App\\Controllers\\AboutController' => __DIR__ . '/../..' . '/app/Controllers/Social/AboutController.php',
        'App\\Controllers\\ContactController' => __DIR__ . '/../..' . '/app/Controllers/Social/ContactController.php',
        'App\\Controllers\\ControllerV' => __DIR__ . '/../..' . '/app/Controllers/ControllerV.php',
        'App\\Controllers\\DocumentsController' => __DIR__ . '/../..' . '/app/Controllers/Admin/DocumentsController.php',
        'App\\Controllers\\PriceController' => __DIR__ . '/../..' . '/app/Controllers/Social/PriceController.php',
        'App\\Controllers\\RegistrationController' => __DIR__ . '/../..' . '/app/Controllers/Admin/RegistrationController.php',
        'App\\Controllers\\TestController' => __DIR__ . '/../..' . '/app/Controllers/TestController.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/app/Models/Model.php',
        'App\\Models\\UserRole' => __DIR__ . '/../..' . '/app/Models/UserRole.php',
        'Core\\ControllerNameParser' => __DIR__ . '/../..' . '/core/ControllerNameParser.php',
        'Core\\DB\\Connector' => __DIR__ . '/../..' . '/core/DB/Connector.php',
        'Core\\DB\\DBRequests' => __DIR__ . '/../..' . '/core/DB/DBRequests.php',
        'Core\\DB\\Delete' => __DIR__ . '/../..' . '/core/DB/Delete.php',
        'Core\\DB\\Insert' => __DIR__ . '/../..' . '/core/DB/Insert.php',
        'Core\\DB\\Select' => __DIR__ . '/../..' . '/core/DB/Select.php',
        'Core\\DB\\Update' => __DIR__ . '/../..' . '/core/DB/Update.php',
        'Core\\DB\\Where' => __DIR__ . '/../..' . '/core/DB/Where.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit718328e1e27fe9bfa3283f56358fde50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit718328e1e27fe9bfa3283f56358fde50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit718328e1e27fe9bfa3283f56358fde50::$classMap;

        }, null, ClassLoader::class);
    }
}
