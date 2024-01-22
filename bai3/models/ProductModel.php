<?php

function getProductAll()
{
    $conn = connection();
    //1. SQL select
    $sql = "SELECT * FROM products";
    //2. Chuẩn bị
    $stmt = $conn->prepare($sql);
    //3. Thực thi
    $stmt->execute();
    //4. Lấy dữ liệu
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
