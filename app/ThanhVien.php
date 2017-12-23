<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
<<<<<<< HEAD
    //
=======
    protected $table = "thanhvien";
    public function khachhang(){
        return $this->belongsTo('App\KhachHang','makh','id');
    }
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
}
