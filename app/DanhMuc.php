<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = "nhomsp";
    
    public function sanpham(){
        return $this->hasMany('App\SanPham','manhomsp','id');
    }
}
