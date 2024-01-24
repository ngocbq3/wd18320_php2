<?php

use App\Router;

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

$router = new Router;

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
