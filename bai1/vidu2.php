<?php
//Mảng tuần tự
$arr1 = [12, 4, 3, 5, 6];
$arr2 = array(3, 5, 7, 5, 67);

//truy cập phần tử theo index
echo $arr1[3];
echo "<br>";

//mảng liên hợp gồm key và value
$user = [
    "id" => 1,
    "username" => "admin",
    "fullname" => "Nguyễn văn Nam",
    "email" => "admin@gmail.com"
];
//Truy cập phần tử mảng
echo $user['email'];
echo "<br>";
//Mảng 2 chiều
//Danh sách sinh viên
$sinhvien = [
    ["mssv" => "PH12345", "hoten" => "Nguyễn Văn Nam", "email" => "namnvph12345@fpt.edu.vn", "hinh" => "namnv.jpg"],
    ["mssv" => "PH12346", "hoten" => "Trần Văn Long", "email" => "longtvph12345@fpt.edu.vn", "hinh" => "longtv.jpg"],
    ["mssv" => "PH12347", "hoten" => "Lê Đình Kiên", "email" => "kienldph12347@fpt.edu.vn", "hinh" => "kienld.jpg"],
];
//truy cập phần tử
echo $sinhvien[1]['hoten'];
