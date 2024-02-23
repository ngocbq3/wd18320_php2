<?php

namespace App\Controllers;

class BaseController
{
    public function view($path, $data = [])
    {
        extract($data);
        include_once "./app/Views/$path.php";
    }
    // abstract public function index();
    // abstract public function create();
    // abstract public function store();
    // abstract public function delete();
    // abstract public function edit();
    // abstract public function update();
}
