<?php


namespace Core;


class Router
{
// private $prop = 'routing...';
 private $routes = [];
 private $httpHost;
 private $requestUri;

 public function __construct()
 {
    $this->serRoutes();
    $this->setServerParams();
 }

 private function serRoutes()
 {
//     $this->routes = include __DIR__ . '/../app/Config/Route.php';
     $this->routes = include APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'Route.php';
 }

 private function setServerParams()
 {
     $this->httpHost = $_SERVER['HTTP_HOST'];
     $this->requestUri = $_SERVER['REQUEST_URI'];

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
        $parser = new ControllerNameParser;
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