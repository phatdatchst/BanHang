<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTHD extends Model
{
    protected $table = "cthd";
    public function sanpham(){
        return $this->belongsTo('App\SanPham','masp','id');
    }
    
    public function hoadon(){
        return $this->belongsTo('App\HoaDon','mahd','id');
    }
}
