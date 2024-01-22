<?php

//Khai báo lớp Animal
class Animal
{
    //Khai báo thuộc tính
    public $ten;
    public $mausac;
    public $cannang;
    protected $sochan = 4;
    private $tenLoai = "Chưa có tên";
    //Sử dụng hàm construct để tạo giá trị cho thuộc tính
    public function __construct($ten, $mausac, $cannang)
    {
        $this->ten = $ten;
        $this->mausac = $mausac;
        $this->cannang = $cannang;
    }
    //Khai báo phương thức
    public function an($thucan)
    {
        $this->cannang += $thucan;
        echo $this->ten . " vừa ăn xong lượng thức ăn là $thucan Kg";
    }

    public function chay()
    {
        echo $this->ten . " đang chạy rất nhanh";
    }
    public function getTenLoai()
    {
        echo $this->tenLoai;
    }
}

//Khai lớp Dog được kết thừa từ lớp Animal
class Dog extends Animal
{
    public $tuoi;
    public function __construct($ten, $mausac, $cannang, $tuoi)
    {
        //Sử dụng lại phương thức construct của lớp cha
        parent::__construct($ten, $mausac, $cannang);
        $this->tuoi = $tuoi;
    }
    public function keu()
    {
        echo $this->ten . " đang kêu gâu ... gâu ";
    }
    //viết hàm để truy cập đến thuộc tính sochan (protected)
    public function getSoChan()
    {
        echo "Số lượng chân của $this->ten là " . $this->sochan;
    }

    public function getTenLoai()
    {
        echo $this->tenLoai;
    }
}

//Khái báo đối tượng
$meoTom = new Animal("Mèo Tom", "Xám", 20);
//Truy cập thuộc tính
echo "Tên con vật là: " . $meoTom->ten;
echo "<br />";
//Truy cập hành động
$meoTom->an(0.1);
echo "<br />";
$meoTom->getTenLoai();
//Truy cấp thuộc tính sochan
// echo "Số lượng chân của $meoTom->ten là " . $meoTom->sochan;

//Khai báo đối tượng từ lớp Dog
$cauVang = new Dog("Cậu Vàng", "Vàng", 25, 5);
echo "<br />";
$cauVang->an(0.5);
echo "<br />";
$cauVang->keu();
echo "<br />";
$cauVang->getSoChan();
// $cauVang->getTenLoai();// không thể truy cập
