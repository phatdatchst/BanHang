<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
<<<<<<< HEAD
    //
=======
    protected $table = "khachang";
    
    public function hoadon(){
        return $this->hasMany('App\HoaDon','makh','id');
    }
    public function thanhvien(){
        return $this->hasOne('App\ThanhVien','makh','id');
    }
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
}
