
<?php

use Core\Router;
require_once 'vendor/autoload.php';
if(isset($_SERVER['REQUEST_URI'])) {

    $router = new Router();

    $router->run();
}
