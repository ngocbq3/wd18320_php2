<?php

//function view dùng để render dữ liệu ra màn hình
//$view: tên file view
//$data: dữ liệu
function view($view, $data = [])
{
    extract($data);
    include_once "views/$view.php";
}
