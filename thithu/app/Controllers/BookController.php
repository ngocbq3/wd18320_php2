<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\CategoryModel;

class BookController extends BaseController implements interfaceController
{
    function index()
    {
        $books = BookModel::all();
        return $this->view(
            "list",
            ["books" => $books]
        );
    }

    public function create()
    {
        $loaisach = CategoryModel::all();
        return $this->view(
            "add",
            ['loaisach' => $loaisach]
        );
    }

    public function store()
    {
        $data = $_POST;
        //Lấy file
        $file = $_FILES['anh'];
        //Validate
        if ($file['size'] == 0) {
            $errors['anh'] = "Bạn chưa nhập ảnh";
        } else {
            $imgs = ['jpg', 'png'];
            //Lấy tên ảnh
            $anh = $file['name'];
            //Lấy phần mở rộng của file
            $file_ext = pathinfo($anh, PATHINFO_EXTENSION);
            //Kiểm tra xem có phải là ảnh không nếu không thì lưu lỗi
            if (in_array($file_ext, $imgs) == false) {
                $errors['anh'] = "Bạn phải nhập ảnh jpg, png";
            }
        }
        //Kiểm tra xem có lỗi không, nếu lỗi thì gọi lại form và hiển thị lỗi
        if (isset($errors)) {
            $loaisach = CategoryModel::all();
            return $this->view(
                "add",
                ['loaisach' => $loaisach, 'errors' => $errors, 'data' => $data]
            );
        }
        //thêm ảnh vào data và upload ảnh lên server
        $data['anh'] = $anh;
        move_uploaded_file($file['tmp_name'], "images/" . $anh);
        BookModel::insert($data);
        header("location: " . ROOT_PATH);
        die;
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            BookModel::delete($id);
        }
        header("location: " . ROOT_PATH);
        die;
    }

    public function edit()
    {
    }
    public function update()
    {
    }
}
