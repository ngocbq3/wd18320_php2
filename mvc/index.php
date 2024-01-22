<?php
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

use App\Models\ProductModel;

dd(ProductModel::all());
