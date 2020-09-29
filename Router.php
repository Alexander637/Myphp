<?php
namespace Core;
class Router
{
    private $routes = [
    '/' => 'TestController@index',
    '/admin' => 'TestController@admin',
    '/error' => 'TestController@error'
    ];
    private $namespace = 'App/Controllers/';
    private $uri ;
    private $host;
    private  $params;

    public function __construct(){
        $this->setHost();
        $this->setUri();
        $this->setParams();
    }
    private function setUri(){
        $this->uri = $_GET['uri'];
    }
    private  function setHost(){
        $this->host = $_SERVER['HTTP_HOST'] . '\\';
    }
    private function setParams(){
        $this->params[] = $_GET['params'];
    }
    public function runShow(){
        var_dump($this->routes);
        echo '<br>';
        var_dump($this->uri);
        echo '<br>';
        var_dump($this->host);
        echo '<br>';
        var_dump($this->namespace);
        echo '<br>';
    }
    public function run(){
        if(isset($this->routes[$this->uri])){
            $parts = explode('@', $this->routes[$this->uri]);
            if (2 !== count($parts)){
                echo "Не валидный контроллер!";
                die();
            }
            $str = $this->namespace . $parts[0];
            $controller = str_replace('/', '\\', $str);
            if (class_exists($controller)){
                $controllerAction = $parts[1];
                $obj = new $controller();
                $reflection = new \ReflectionClass($controller);
                $action =$reflection->getMethod($controllerAction);
                $action->invokeArgs($obj, $this->params);
            } else{
                echo 'Такого класса не существует!';
                die();
            }
        } else{
            echo 'Такого пути не существует!';
            die();
        }
    }

}