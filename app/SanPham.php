<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
<<<<<<< HEAD
    //
    protected $table = 'sanpham';
    public function nhacungcap() {
        return $this->belongsTo('App\NhaCungCap','mancc','id');
    }
=======
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
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
}
