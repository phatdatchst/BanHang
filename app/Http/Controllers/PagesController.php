<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
class PagesController extends Controller
{
    public function getIndex(){
        $sanpham = SanPham::where('manhomsp','1')->get();
        return view('pages.trangchu',compact('sanpham'));
    }
}
