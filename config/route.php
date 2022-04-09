<?php

// Importing the different controllers we will use in our website
use App\Controllers\UserController;

// We are connecting to the new component 'nikic/fast-route' we just install.
// This is the default configuration suggested by the provider, and we just
// personalize de different routes '/' for index and '/user/{id}' for show,
// functions which were created in the UserController.php file
$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', [UserController::class, 'index']);
    $r->addRoute('GET', '/user/{id}', [UserController::class, 'show']);
});

// Here we get the class ("App\Controllers\UserController" in this case) and the
// method (index or show as defined in our controller). This information is
// stored in '$route' as an array.
$route = $dispatcher->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI']
);

// Here we use the array stored in '$route' in its position [1] and separate
// its content in '$class' and '$method'.
// https://www.php.net/manual/es/function.list.php
list($class, $method) = $route[1];

// We call '$class', '$method' and the results from '$route' array in tis
// position [2]. https://www.php.net/manual/es/function.call-user-func-array
call_user_func_array([new $class, $method], $route[2]);