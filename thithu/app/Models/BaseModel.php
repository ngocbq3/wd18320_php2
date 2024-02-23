<?php

namespace App\Models;

use PDO;

class BaseModel
{
    protected $conn = null;
    protected $tableName;
    protected $primaryKey = 'id';
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
            echo "Lỗi kết nối dữ liệu: " . $e->getMessage();
        }
    }

    public static function all()
    {
        $model = new static;
        $sqlBuilder = "SELECT * FROM $model->tableName";
        $stmt  = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public static function find($id)
    {
        $model = new static;
        $sqlBuilder = "SELECT * FROM $model->tableName WHERE $model->primaryKey=:$model->primaryKey";
        $stmt  = $model->conn->prepare($sqlBuilder);
        $data = ["$model->primaryKey" => $id];
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        //Trong trường hợp có dữ liệu
        if ($result) {
            return $result[0];
        }
        return $result;
    }

    public static function insert($data)
    {
        $model = new static;
        $sqlBuilder = "INSERT INTO $model->tableName( ";

        //Biến values để nối các tham số cho value
        $values = "";
        foreach ($data as $column => $value) {
            $sqlBuilder .= "`{$column}`, ";
            $values .= ":$column, ";
        }
        //thực loại bỏ dấu ", " ở bên phải chuỗi bằng hàm rtrim
        $sqlBuilder = rtrim($sqlBuilder, ", ") . ") ";
        $values = "VALUES( " . rtrim($values, ", ") . ")";
        //Nối chuỗi sqlbuilder với values
        $sqlBuilder .= $values;

        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute($data);
        //trả lại giá trị id mới nhất
        return $model->conn->lastInsertId();
    }

    public static function update($id, $data)
    {
        $model = new static;
        $sqlBuilder = "UPDATE $model->tableName SET ";
        foreach ($data as $column => $value) {
            $sqlBuilder .= "`{$column}`=:$column, ";
        }
        //Xóa dấu ", " ở cuối chuỗi
        $sqlBuilder = rtrim($sqlBuilder, ", ");
        //Thêm điều kiện cho câu lệnh SQL
        $sqlBuilder .= " WHERE `$model->primaryKey`=:$model->primaryKey";

        $stmt = $model->conn->prepare($sqlBuilder);
        //Thêm $id vào $data
        $data["$model->primaryKey"] = $id;
        return $stmt->execute($data);
    }

    /**
     * method delete: để xóa dữ liệu theo id
     */
    public static function delete($id)
    {
        $model = new static;
        $sqlBuilder = "DELETE FROM $model->tableName WHERE `$model->primaryKey`=:$model->primaryKey";
        $stmt = $model->conn->prepare($sqlBuilder);
        return $stmt->execute(["$model->primaryKey" => $id]);
    }
}
