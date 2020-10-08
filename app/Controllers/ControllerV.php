<?php


namespace App\Controllers;

use Core\View;

class ControllerV
{
public function generate(string $viewName, $templateName, array $param = []){
View::generate($viewName,$templateName, $param);
}
}