<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
<<<<<<< HEAD
    //
    protected $table = "nhacungcap";
    
    public function sanpham() {
        return $this->hasMany('App\SanPham','mancc','id');
        ;
=======
    protected $table = "nhacungcap";
    public function sanpham(){
        return $this->hasMany('App\SanPham','mancc','id');
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
    }
}
