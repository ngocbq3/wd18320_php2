<?php

//Biến hằng
const PI = 3.14;
define("HELLO", "Xin chào các bạn lớp WD18320");

echo HELLO;

//Biến cục bộ
function show()
{
    $message = "PHP nâng cao";
    echo $message;
}

// echo $message;
echo "<br>";
//Biến toàn cục
$str = "HELLO WORLD";
function showHello()
{
    global $str;
    echo $str;
}
showHello();
