<?php

class ShopBank extends BankAbstract
{
    public function napTiep($sotien)
    {
        $this->soDu += $sotien;
    }

    public function rutTien($sotien)
    {
        $this->soDu -= $sotien;
    }
    public function chuyenTien($sotien, $nguoiNhan)
    {
        if ($sotien < $this->soDu) {
            $this->soDu -= $sotien;
            $nguoiNhan->soDu += $sotien;
            echo "<br />Bạn vừa chuyển tiền thành công số tiền $sotien";
            echo "<br />Tới tài khoản $nguoiNhan->stk";
            echo "<br />Số dư tài khoản: $this->soDu";
        } else {
            echo "<br />Số tiền trong tài khoản không đủ";
        }
    }
}
