<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = "hoadon";
    
    public function cthd(){
        return $this->hasMany('App\CTHD','mahd','id');
    }
    
    public function khachhang(){
        return $this->belongsTo('App\KhachHang','makh','id');
    }
    
    public function nhanvien(){
        return $this->belongsTo('App\NhanVien','manv','id');
    }
}
