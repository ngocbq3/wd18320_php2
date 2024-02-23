<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    //Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = ProductModel::all();
        //lấy thông tin message
        $message = $_COOKIE['message'] ?? "";
        return $this->view(
            "admin/products/list",
            ["products" => $products, "message" => $message]
        );
    }
    //Hiển thị form thêm mới SP
    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view(
            "admin/products/add",
            ["categories" => $categories]
        );
    }
    //Thêm dữ liệu vào database
    public function store()
    {
        $data = $_POST;
        //Xử lý ảnh
        $file = $_FILES['image'];
        //Lấy tên ảnh
        $image = $file['name'];
        //Upload
        move_uploaded_file($file['tmp_name'], "images/" . $image);
        //Thêm ảnh vào $data
        $data['image'] = $image;
        //insert 
        ProductModel::insert($data);
        header("location: " . ROOT_PATH . "product/list");
        die;
    }
    //Phương thức hiển thị Form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $product = ProductModel::find($id);
        $categories = CategoryModel::all();
        return $this->view(
            "admin/products/edit",
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }
    //Phương thức cập nhật dữ liệu
    public function update()
    {
        $data = $_POST;
        //Xử lý file
        $file = $_FILES['image'];
        //Kiểm tra xem có nhập ảnh không
        if ($file['size'] > 0) {
            $image = $file['name'];
            move_uploaded_file($file['tmp_name'], "images/" . $image);
            //Thêm ảnh vào data
            $data['image'] = $image;
        }
        //Cập nhật dữ liệu
        ProductModel::update($data['id'], $data);
        //chuyển hướng website về lại form edit
        header("location: " . ROOT_PATH . "product/edit?id=" . $data['id']);
        die;
    }

    //phương thức xóa dữ liệu
    public function delete()
    {
        $id = $_GET['id'];
        ProductModel::delete($id);
        //Thông báo
        setcookie("message", "Xóa dữ liệu thành công", time() + 2);
        //chuyển hướng sang list
        header("location: " . ROOT_PATH . "product/list");
        die;
    }
}
