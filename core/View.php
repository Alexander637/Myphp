<?php

namespace App\Controllers;
namespace Core;

class View
{
    const FILE_EXTENSION_PHP = '.php';

    public static function generate($viewName, $templateName, $data = []){
        if (is_array($data)){
            extract($data);
        }

        $templates = __DIR__ . '/../View' . '/templates/' . $templateName . self::FILE_EXTENSION_PHP;

        if (file_exists($templates)){
            include $templates;
        }
        else{
            throw new \Exception('Templates' . $templates . ' absent');
        }
    }
}