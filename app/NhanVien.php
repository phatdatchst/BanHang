<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
<<<<<<< HEAD

=======
>>>>>>> 26c74923d06d015ccf0cb95ab7d72fa1650b9988
    protected $table="nhanvien";
    public function hoadon(){
        return $this->hasMany('App\HoaDon','manv','id');
    }
<<<<<<< HEAD

=======
>>>>>>> 26c74923d06d015ccf0cb95ab7d72fa1650b9988
}
