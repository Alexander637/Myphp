<?php
namespace App\Controllers;
use Exception;
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
public function error($name){
      exit('Server Aborted');

}
}