<?php

namespace App\Controllers;

//use Core\View;
class TestController extends ControllerV
{
    public function index()
    {
          $this->generate('\social\index');
    }

}