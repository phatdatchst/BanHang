<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDon;
use App\KhachHang;
use App\NhanVien;
class HoaDonController extends Controller
{
    public function getDanhSach(){
        $hoadon = HoaDon::all();
        return view('admin.hoadon.danhsach',['hoadon' => $hoadon]);
    }
    public function getThem(){
        $khachhang = KhachHang::all();
        $nhanvien = NhanVien::all();
        return view('admin.hoadon.them',['khachhang' => $khachhang,'nhanvien' => $nhanvien]);
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'ngaylap' => 'required',
            'trangthai' => 'required'
        ],
        
        [
            'tennhom.required' => 'Bạn Chưa Nhập Tên Danh Mục',
            'tennhom.required' => 'Bạn Chưa Nhập Trạng Thái',
        ]);
        $hoadon = new HoaDon;
        $hoadon->makh = $request->khachhang;
        $hoadon->manv = $request->nhanvien;
        $hoadon->thanhtien = $request->thanhtien;
        $hoadon->ngaylap = $request->ngaylap;
        $hoadon->trangthai = $request->trangthai;
        $hoadon->ghichu = $request->ghichu;
        $hoadon->save();
        
        return redirect('admin/chitiet/them')->with('thongbao','Thêm Thành Công');
    }
    public function getSua($id){
        $khachhang = KhachHang::all();
        $nhanvien = NhanVien::all();
        $hoadon = HoaDon::find($id);
        return view('admin.hoadon.sua',['hoadon' => $hoadon,'khachhang' => $khachhang,'nhanvien' => $nhanvien]);
    }
    public function postSua(Request $request,$id){
        $hoadon = HoaDon::find($id);
        $this->validate($request, [
            'ngaylap' => 'required',
            'trangthai' => 'required'
        ],
        
        [
            'tennhom.required' => 'Bạn Chưa Nhập Tên Danh Mục',
            'tennhom.required' => 'Bạn Chưa Nhập Trạng Thái',
        ]);
        $hoadon->makh = $request->khachhang;
        $hoadon->manv = $request->nhanvien;
        $hoadon->thanhtien = $request->thanhtien;
        $hoadon->ngaylap = $request->ngaylap;
        $hoadon->trangthai = $request->trangthai;
        $hoadon->ghichu = $request->ghichu;
        $hoadon->save();
        return redirect('admin/hoadon/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function getXoa($id){
        $hoadon = HoaDon::find($id);
        $hoadon->delete();
        return redirect('admin/hoadon/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
