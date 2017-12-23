<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTHD extends Model
{
<<<<<<< HEAD
    //
=======
    protected $table = "cthd";
    public function sanpham(){
        return $this->belongsTo('App\SanPham','masp','id');
    }
    
    public function hoadon(){
        return $this->belongsTo('App\HoaDon','mahd','id');
    }
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
}
