<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{

<<<<<<< HEAD
    //

=======
>>>>>>> 26c74923d06d015ccf0cb95ab7d72fa1650b9988
    protected $table = "thanhvien";
    public function khachhang(){
        return $this->belongsTo('App\KhachHang','makh','id');
    }

}
