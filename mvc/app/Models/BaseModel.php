<?php

/**
 * Quy tắc đặt tên namespace: đặt tên theo tên thư mục (Pascal Case)
 * ký tự đầu của từ viết hoa
 * nhiều thư mục thì sẽ cách nhau bởi dấu \
 */

namespace App\Models;

use PDO;

/**
 * Đặt tên class theo tên file
 */
class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    //Đặt tên cột khóa chính
    protected $primaryKey = "id";
    public function __construct()
    {
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username = USERNAME;
        $password = PASSWORD;
        try {
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Lỗi kết nối CSDL: " . $e->getMessage();
        }
    }

    //function all dùng để lấy toàn bộ dữ liệu của bảng
    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    //Method find: tìm kiếm dữ liệu theo id
    //@id: tham số truyền vào
    public static function find($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE $model->primaryKey=:$model->primaryKey";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $data = ["$model->primaryKey" => $id];
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        //Kiểm tra xem có lấy được dữ liệu không
        if ($result) {
            return $result[0]; //lấy phần tử đầu tiên
        }
        return $result;
    }

    /**
     * Method where: tìm kiếm dữ liệu theo điều kiện, xây dựng câu lệnh SQL
     * @$column: tên cột làm điều kiện
     * @$codition: điều kiện =, >, <, ..
     * @$value: là giá trị của điều kiện
     */
    public static function where($column, $codition, $value)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column` $codition '$value' ";
        return $model;
    }
    //Method andWhere: dùng để thêm tiếp điều kiện cho câu lệnh sqlBuilder
    public function andWhere($column, $codition, $value)
    {
        $this->sqlBuilder .= " AND `$column` $codition '$value' ";
        return $this;
    }
    //Method orWhere: dùng để thêm tiếp điều kiện cho câu lệnh sqlBuilder
    public function orWhere($column, $codition, $value)
    {
        $this->sqlBuilder .= " OR `$column` $codition '$value' ";
        return $this;
    }
    //Method get: dùng để thực thi câu lệnh điều kiện
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
