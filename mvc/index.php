<?php
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

use App\Models\ProductModel;

// dd(ProductModel::all());

// dd(ProductModel::find(143));

// $pro = ProductModel::where("name", "LIKE", "%iphone%")
//     ->andWhere('price', '>', 1000)
//     ->get();

// dd($pro);

$data = [
    "name" => "Iphone 22",
    "price" => 2000,
    "detail" => "1 quả thận"
];
ProductModel::insert($data);
