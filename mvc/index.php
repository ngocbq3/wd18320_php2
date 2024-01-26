<?php

use App\Router;
use App\Controllers\HomeController;

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

$router = new Router;

Router::get("/home", [HomeController::class, 'index']);
Router::get("/detail", [HomeController::class, 'detail']);
Router::get("/", function () {
    echo "Trang chủ";
});
Router::get("/about", function () {
    echo "trang giới thiệu";
});
Router::get("/product/create", function () {
    echo "Trang thêm sản phẩm";
});

$router->resolve();
