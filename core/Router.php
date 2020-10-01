<?php

namespace App\Controllers;
namespace Core;

use App\Controllers\TestController;

class Router
{
    public $routes = [
        '/' => 'Test@index',
        '/admin' => 'Test@admin',
        '/404' => 'Error@error',
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

    public function errorControllerHeader():string {

        $host  = $_SERVER['HTTP_HOST'];
        $uriEr   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php?uri=%2F404&name=';

        return header("Location: http://$host$uriEr/$extra");
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
             $this->errorControllerHeader();
//                throw new \Exception($parser->getErrorMessage());
            }
        } else {
           $this->errorControllerHeader();
//            throw new \Exception('Controller ' . $this->requestUri . ' absent');
        }
    }
}