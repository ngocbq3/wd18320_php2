<?php

//Khai báo 1 lớp
class TenLop
{
    //Khai báo thuộc tính 
    // có thể sử dụng các từ khóa public, protected, private
    public $thuoctinh1;
    public $thuoctinh2;

    //Khai báo hành động (phương thức) của lớp
    public function hanhDong1()
    {
        echo "Đây là hành động thứ nhất";
    }
    public function hanhDong2()
    {
        echo "Đây là hành động thứ 2";
    }
}

//Tạo đối tường từ lớp
$doituong1 = new TenLop();
//Gọi đến 1 thuộc tính
$doituong1->thuoctinh1 = "Giá trị 1";
$doituong1->thuoctinh2 = "Giá trị 2";
//Gọi đến phương thức
$doituong1->hanhDong1();
echo "<br />";
$doituong1->hanhDong2();
