<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
class IndexController extends Controller
{
    //
    public function getIndex(){
        $sanpham = SanPham::all();
        
        return view('pages.trangchu', compact('sanpham'));
    }
    public function getChitietsanpham(){
        return view('pages.chitietsanpham');
    }
    public function getDangki(){
        return view('pages.dangki');
    }
    public function getGiohang(){
        return view('pages.giohang');
    }
    public function getGioithieu(){
        return view('pages.gioithieu');
    }
    public function getSanPham(){
        return view('pages.sanpham');
    }
    public function getThanhToan(){
        return view('pages.thanhtoan');
    }
    
}
