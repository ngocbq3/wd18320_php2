<?php

//function dd dùng để var_dump dữ liệu
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}
