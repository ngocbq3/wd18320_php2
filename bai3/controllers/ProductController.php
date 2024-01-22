<?php

//function productIndex() hiển thị (gọi giao diện) danh sach sản phẩm
function productIndex()
{
    $products = getProductAll();
    // $data = ["products" => $products];
    view('product', ["products" => $products]);
}
