<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
<<<<<<< HEAD
    //
=======
    protected $table="nhanvien";
    public function hoadon(){
        return $this->hasMany('App\HoaDon','manv','id');
    }
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
}
