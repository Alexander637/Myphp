<?php

namespace App\Controllers;

class TestController
{
    public function __construct() {
        echo "TEST Controller" . '<br>';
    }
public function index($name){
    echo 'Hello ' . $name;
}
public function admin($name){
        echo "Admin " . $name;
}

}