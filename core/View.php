<?php

namespace App\Controllers;
namespace Core;

class View
{
    const FILE_EXTENSION_PHP = '.php';

    public static function generate($contentView, $data = []){
        if (is_array($data)){
            extract($data);
        }
        $templates = __DIR__ . '\..\view' . $contentView . self::FILE_EXTENSION_PHP;

        if (file_exists($templates)){
            include $templates;
        }
        else{
            throw new \Exception('Templates' . $templates . ' absent');
        }
    }
}