
<br>
<br>
<br>
<form action="index.php">
<input type="text" name="uri" value="/" placeholder="Введите URI">
    <input type="text" name="name" placeholder="Введите Имя">
    <button type="submit">Send</button>
</form>
<?php
use Core\Router;
require_once 'vendor/autoload.php';
if (isset($_GET['name'])) {
    $router = new Router();
    $name = 'IndexController';
    $uri = $_GET['uri'];
    $router->setServerParams($uri);
    $router->setRoutes($name);
    echo '<br>';
    $router->run();
}
?>