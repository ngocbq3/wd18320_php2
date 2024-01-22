<?php
$host = "127.0.0.1"; //Localhost
$dbname = "we3014.01";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "lỗi kết nối CSDL: " . $e->getMessage();
}

//Lấy dữ liệu
//1. SQL select
$sql = "SELECT * FROM products";
//2. Chuẩn bị
$stmt = $conn->prepare($sql);
//3. Thực thi
$stmt->execute();
//4. Lấy dữ liệu
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";
