<?php

//1. Anonymous Function
function () {
    echo "Xin chào";
};
//Gọi hàm
call_user_func(function () {
    echo "Xin chào";
});
echo "<br />";
//Có tham số
call_user_func(function ($name) {
    echo "Xin chào <b>$name</b>";
}, "Hồng Duy");

//IIFE
(function ($name) {
    echo "<h3>Xin chào: $name</h3>";
})("Văn Lợi");

//Closure
$hello = function () {
    echo "Xin chào bạn đến với Fpoly";
};
//Gọi hàm
$hello();

echo "<br />";
//Callback
function getFullName($fname, $lname, $callback)
{
    $fullname = $fname . " " . $lname;
    //Kiểm tra xem callback nó có phải là hàm không
    if (is_callable($callback)) {
        $callback($fullname);
    } else {
        echo "$callback không phải là hàm";
    }
}
//gọi hàm
getFullName("Lê Văn", "Duy", function ($fullname) {
    echo "<h2>$fullname</h2>";
});
//Xây dựng hàm callback
function fullName($fullname)
{
    echo "<h2>$fullname</h2>";
}
//Gọi hàm callback
getFullName("Đoàn Thanh", "Minh", "fullName1");
