<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table = "nhacungcap";
    public function sanpham(){
        return $this->hasMany('App\SanPham','mancc','id');
    }
}
