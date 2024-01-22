<?php

require_once "./Animal.php";
require_once "./Dog.php";
require_once "./Cat.php";

$cauVang = new Dog("Cậu Vàng", "Vàng");
$meoTom = new Cat("Mèo Tom", "Xám");

$cauVang->makeSound();
$meoTom->makeSound();

//Tính trừu tượng
require_once "./BankAbstract.php";
require_once "./ShopBank.php";

// $user1 = new ShopBank("lê Văn Hoàng", "0123456", 20000000);
// $user2 = new ShopBank("Nguyễn Lê Nhất", "0223456", 0);

// $user1->chuyenTien(500000, $user2);

//Interface
require_once "./BankInterface.php";
require_once "./TPBank.php";

use App\TPBank;

$user1 = new TPBank("lê Văn Hoàng", "0123456", 20000000);
$user2 = new TPBank("Nguyễn Lê Nhất", "0223456", 0);

$user1->chuyenTien(500000, $user2);
var_dump($user1);
