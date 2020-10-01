<?php

namespace App\Controllers;

class ErrorController
{
    public function __construct() {
        echo "ERROR Controller" . '<br>';
    }

    public function error(){
        exit('Server Aborted');

    }
}