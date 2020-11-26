<?php

namespace App\Controllers;
namespace Core;

class Router
{
    public $routes = [
        '/phpMy/' => 'Test@index',
        '/registration' => 'Registration@registration',
        '/contact' =>'Contact@contact',
        '/about' => 'About@about',
        '/documents' => 'Documents@documents',
        '/price'=>'Price@price',
        '/admin' => 'Test@admin'
    ];
    public $httpHost;
    public $requestUri;
    public $requestParams = [];

    public function __construct()
    {
        $this->setServerParams();
    }
    public function setServerParams()
    {
        $this->httpHost = $_SERVER['HTTP_HOST'];
        if (isset($_GET['key'])){
            $this->requestUri = $_GET['key'];
        }else{
            $this->requestUri = '/phpMy/';
        }
    }

    public function run()
    {
        if (array_key_exists($this->requestUri, $this->routes)) {
           $parser = new ControllerNameParser();
            $checkController = $parser->parse($this->routes[$this->requestUri]);
            if ($checkController) {
                $controller = $parser->getController();
                $contrObj = new $controller();
                $reflectionController = new \ReflectionClass($parser->getController());
                $method = $reflectionController->getMethod($parser->getActionName());
                $method->invokeArgs($contrObj,$this->requestParams);
            } else {
                throw new \Exception($parser->getErrorMessage());
            }
        } else {
            throw new \Exception('Controller ' . $this->requestUri . ' absent');
        }
    }
}