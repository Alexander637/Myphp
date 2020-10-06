<?php


namespace App\Controllers;

use Core\View;

class ControllerV
{
public function generate(string $viewName, array $param = []){
View::generate($viewName, $param);
}
}