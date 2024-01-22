<?php

namespace App;

interface BankInterface
{
    public function napTien($sotien);
    public function rutTien($sotien);
    public function chuyenTien($sotien, $nguoiNhan);
}
