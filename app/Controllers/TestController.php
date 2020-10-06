<?php

namespace App\Controllers;

//use Core\View;
class TestController extends ControllerV
{
//    public function __construct() {
//        echo "TEST Controller" . '<br>';
//    }

public function index(){

  $this->generate('\social\index');

}
//public function admin($name){
//        echo "Admin " . $name;
//        $this->generate('/social/registration');
//}

}