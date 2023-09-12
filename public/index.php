<?php

use App\Controllers\ErrorController;
use App\Controllers\MainController;

require __DIR__ . '/../vendor/autoload.php';

$subFolder = $_SERVER['BASE_URI'];

$router = new AltoRouter();
$router->setBasePath($subFolder);

$router->map(
    "GET",
    "/",
    [
        'controller' => MainController::class,
        'method' => 'home'
    ],
    "page_home"
);
$router->map(
    "GET",
    "/detail/[i:id]",
    [
        'controller' => MainController::class,
        'method' => 'detail'
    ],
    "page_detail"
);
$router->map(
    "GET",
    "/type_list",
    [
        'controller' => MainController::class,
        'method' => 'typeList'
    ],
    "page_type_list"
);
$router->map(
    "GET",
    "/by_type_list/[i:id]",
    [
        'controller' => MainController::class,
        'method' => 'byTypeList'
    ],
    "page_type_by_list"
);


$match = $router->match();

if($match !== false) {
    $target = $match['target'];
    $objectController = $target['controller'];
    $method = $target['method'];

    $controller = new $objectController($router);
    $params = $match['params'];

    $controller->$method($params);

} else {
    $errorController = new ErrorController($router);
    $errorController->error404Action();
}
