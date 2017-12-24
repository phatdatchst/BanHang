<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
<<<<<<< HEAD

    //
    protected $table = "sanpham";
=======
    protected $table = 'sanpham';
    public function nhacungcap() {
        return $this->belongsTo('App\NhaCungCap','mancc','id');
    }
>>>>>>> 26c74923d06d015ccf0cb95ab7d72fa1650b9988
    
    public function danhmuc(){
        return $this->belongsTo('App\DanhMuc','manhomsp','id');
    }
    
    public function cthd(){
        return $this->hasMany('App\CTHD','masp','id');
    }
<<<<<<< HEAD

=======
>>>>>>> 26c74923d06d015ccf0cb95ab7d72fa1650b9988
}
