<?php

namespace App\Controllers;

//use Core\View;
class TestController extends ControllerV
{
    public function index()
    {
          $this->generate('index', 'index'  );
    }

    public function admin(){
        $this->generate('index', 'adminIndex');
    }

}