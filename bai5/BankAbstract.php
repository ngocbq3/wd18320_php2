<?php

abstract class BankAbstract
{
    public $hoten;
    public $stk;
    public $soDu;
    public function __construct($hoten, $stk, $soDu)
    {
        $this->hoten = $hoten;
        $this->stk = $stk;
        $this->soDu = $soDu;
    }

    public abstract function napTiep($sotien);
    public abstract function rutTien($sotien);
    public abstract function chuyenTien($sotien, $nguoiNhan);
}
