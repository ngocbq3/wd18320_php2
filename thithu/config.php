<?php
const ROOT_PATH = "http://localhost/wd18320_php2/thithu/";
const ROOT_URI = "/wd18320_php2/thithu/";

//hàm dd dùng để bug
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

//Hàm chuyển hướng website
function redirect($route)
{
    header("location:" . ROOT_PATH . $route);
    die;
}
