<?php
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/ProductModel.php";
require_once __DIR__ . "/controllers/Controller.php";
require_once __DIR__ . "/controllers/ProductController.php";

$ctl = $_GET['ctl'] ?? "";

switch ($ctl) {
    case "":
    case "home":
        echo "<h1>Trang chủ</h1>";
        break;
    case "about":
        echo "<h1>Trang giới thiệu</h1>";
        break;
    case "contact":
        echo "<h1>Trang liên hệ</h1>";
        break;
    case "product":
        productIndex();
        break;
    default:
        echo "<h1>404 FILE NOT FOUND</h1>";
}
