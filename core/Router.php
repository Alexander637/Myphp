<?php

namespace App\Controllers;
namespace Core;


use App\Controllers\TestController;

class Router
{
    public $routes = [
        '/' => 'Test@index',
        '/admin' => 'Test@admin',
        '/404' => 'Test@error'
    ];
    public $httpHost;
    public $requestUri;
    public $requestParams = [];

    public function __construct()
    {
/*        $this->setRoutes();*/
        $this->setServerParams($_GET['uri']);
        $this->setRequestParams();
    }
    public function setServerParams($uri)
    {
        $this->httpHost = $_SERVER['HTTP_HOST'];
        $this->requestUri = $uri;

    }
    public function setRequestParams(){
        $this->requestParams[] = $_GET['name'];
    }
    public function setRoutes($name)
    {

    }
    public function runShow()
    {
        var_export($this->routes);
        echo '<br>';
        var_export( $this->httpHost);
        echo '<br>';
        var_export($this->requestUri);
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
                $method->invokeArgs($contrObj, $this->requestParams);
            } else {
                throw new \Exception($parser->getErrorMessage());
            }
        } else {
            throw new \Exception('Controller ' . $this->requestUri . ' absent');
        }
    }
}