<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\DanhMuc;
class PagesController extends Controller
{
    public function getIndex(){
        $nhomsp = DanhMuc::all();
        $sanpham = SanPham::all()->take(4);
        //sửa lại lấy all
        return view('pages.trangchu',compact('sanpham','nhomsp'));
    }
    public function  getSanPham($type){
        $nhomsp = SanPham::where('manhomsp',$type)->get();
        return view('pages.sanpham',compact('nhomsp'));
    }
    public function getChiTiet(Request $request){
        $sanpham = SanPham::where('id',$request->id)->first();
        $sanphamtuongtu = SanPham::where('manhomsp', $sanpham->manhomsp)->paginate(3);
        return view('pages.chitietsanpham',compact('sanpham','sanphamtuongtu'));
    }
}
