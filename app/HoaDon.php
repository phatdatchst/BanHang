<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
<<<<<<< HEAD
    //
=======
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
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
}
