<?php

namespace App;

class Router
{
    //$routes lưu trữ thông tin đường dẫn
    protected static $routes = [];

    /**
     * method get: khai báo đường dẫn theo phương thức get
     * @$path: đường dẫn
     * @$callback: hành động
     */
    public static function get($path, $callback)
    {
        static::$routes['get'][$path] = $callback;
    }
    public static function post($path, $callback)
    {
        static::$routes['post'][$path] = $callback;
    }
    //method getMethod: lấy phương thức từ server
    public function getMethod()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
    //method resolve: dùng để thực thi hành động theo đường dẫn được khai báo
    public function resolve()
    {
        $method = $this->getMethod();
        $path = $_SERVER["REQUEST_URI"];
        //làm gọn đường dẫn
        $path = str_replace(ROOT_URI, "/", $path);

        $callback = false;
        //Kiểm tra đường dẫn trên thanh URL xem có được khai báo chưa
        if (isset(static::$routes[$method][$path])) {
            $callback = static::$routes[$method][$path];
        }
        if ($callback === false) {
            echo "404 FILE NOT FOUND";
            die;
        }
        if (is_callable($callback)) {
            return $callback();
        }
    }
}
