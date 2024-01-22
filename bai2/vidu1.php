<?php

//Hàm không có giá trị trả về
//Hàm không có tham số
function welcome()
{
    echo "<h3>Chào mừng bạn đến với website</h3>";
}
//Gọi hàm
welcome();

//Hàm có tham số
function showName($name)
{
    echo "Tên bạn: $name";
}
//Gọi hàm
showName("Nguyễn Duy");

//Hàm có tham số là giá trị mặc định
function showName2($name = "Dũng")
{
    echo "<h4>Tên bạn là: $name</h4>";
}
showName2();

//Hàm có giá trị trả về
function sum($a, $b)
{
    return $a + $b;
}
//Hàm không biết trước số lượng tham số
//sử dụng toán tử rest có ... ở trước biến
function sumMultiNumber(...$numbers)
{
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    return array_sum($numbers);
}
//Gọi hàm
echo "Tổng các số = " . sumMultiNumber(3, 2, 4, 3, 4, 5, 4, 4, 5, 4, 54);
