<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class ThanhVien extends Authenticatable
{

    use Notifiable;
    protected $guard = 'thanhvien';
    protected $table = "thanhvien";
    public function khachhang(){
        return $this->belongsTo('App\KhachHang','makh','id');
    }
    
    protected $fillable = [
        'tentv', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

}
