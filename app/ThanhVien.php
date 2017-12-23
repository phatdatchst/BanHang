<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    protected $table = "thanhvien";
    public function khachhang(){
        return $this->belongsTo('App\KhachHang','makh','id');
    }
}
