<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = "sanpham";
    
    public function danhmuc(){
        return $this->belongsTo('App\DanhMuc','manhomsp','id');
    }
    
    public function nhacungcap(){
        return $this->belongsTo('App\NhaCungCap','mancc','id');
    }
    
    public function cthd(){
        return $this->hasMany('App\CTHD','masp','id');
    }
}
