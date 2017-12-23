<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table="nhanvien";
    public function hoadon(){
        return $this->hasMany('App\HoaDon','manv','id');
    }
}
