<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "khachang";
    
    public function hoadon(){
        return $this->hasMany('App\HoaDon','makh','id');
    }
    public function thanhvien(){
        return $this->hasOne('App\ThanhVien','makh','id');
    }
}
