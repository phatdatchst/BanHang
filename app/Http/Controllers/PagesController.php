<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\DanhMuc;
class PagesController extends Controller
{
    public function getIndex(){
        $nhomsp = DanhMuc::all();
        $sanpham = SanPham::all();
        //sửa lại lấy all
        return view('pages.trangchu',compact('sanpham','nhomsp'));
    }
}
