<?php

namespace App\Http\Controllers;
use App\CTHD;
use Illuminate\Http\Request;
use App\HoaDon;
use App\SanPham;

class CTHDController extends Controller
{
    public function getDanhSach(){
         $cthd = CTHD::all();
        return view('admin.cthd.danhsach',['cthd' => $cthd]);
    }
    public function getThem(){
        $hoadon = HoaDon::all();
        $sanpham = SanPham::all();
        return view('admin.cthd.them',['sanpham' => $sanpham,'hoadon' => $hoadon]);
    }
    public function postThem(Request $request){
        
        $cthd = new CTHD;
        $cthd->mahd = $request->HoaDon;
        $cthd->masp = $request->SanPham;
        $cthd->soluong = $request->soluong;
        $cthd->tonggia = $request->tonggia;
        $cthd->save();
    
        return redirect('admin/chitiet/them')->with('thongbao','Thêm Thành Công');
    }
    public function getSua($id){
        $hoadon = HoaDon::all();
        $sanpham = SanPham::all();
        $cthd = CTHD::find($id);
        return view('admin.danhmucsanpham.sua',['cthd' => $cthd,'sanpham' => $sanpham,'hoadon' => $hoadon]);
    }
    public function postSua(Request $request,$id){
        $cthd = CTHD::find($id);
        $cthd->mahd = $request->HoaDon;
        $cthd->masp = $request->SanPham;
        $cthd->soluong = $request->soluong;
        $cthd->tonggia = $request->tonggia;
        $cthd->save();
        return redirect('admin/chitiet/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function getXoa($id){
        $cthd = CTHD::find($id);
        $cthd->delete();
        return redirect('admin/danhmucsanpham/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
