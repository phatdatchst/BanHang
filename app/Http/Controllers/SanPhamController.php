<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

class SanPhamController extends Controller
{
    public function getDanhSach(){
        $sanpham = SanPham::all();
        return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }
    public function getThem(){
        return view('admin.sanpham.them');
    }
     public function postThem(Request $request){
        $this->validate($request, [
            'tensp' => 'required|min:2|max:50',
            'chitiet' => 'required|min:2|max:500',
            'gianhap' => 'required|min:2|max:50',
            'giaban' => 'required|min:2|max:50',
            'soluong' => 'required|min:2|max:50',
            'hinhanh' => 'required',
            'trangthai' => 'required|min:2|max:50',
            'ngaynhap' => 'required|min:2|max:50',
            'manhomsp' => 'required|max:12',
            'mancc' => 'required|min:5|max:100',
        ],
            
        [
            'tensp.required' => 'Bạn Chưa Nhập Tên Sản Phẩm',
            'tensp.min' => 'Tên Sản Phẩm Cấp Quá Ngắn',
            'tensp.max' => 'Tên Sản PhẩmCấp Quá Dài',
            'chitiet.required' => 'Bạn Chưa Nhập Chi tiết',
            'chitiet.min' => 'Tên Quốc Gia Quá Ngắn',
            'chitiet.max' => 'Tên Quốc Gia Quá Dài',
            'hinhanh.required' => 'Bạn Chưa Chọn Hình ảnh',
            'trangthai.required' => 'Bạn Chưa Nhập Trạng Thái',
            'ngaynhap.required' => 'Bạn Chưa Nhập Ngày',
            'manhomsp.required' => 'Bạn Chưa Nhập Mã Nhóm Sản Phẩm',
            'mancc.required' => 'Bạn Chưa Nhập Mã Nhà Cung Cấp',
            
            
        ]);
        $sanpham = new SanPham();
        $sanpham->tensp = $request->tensp;
        $sanpham->chitiet = $request->chitiet;
        $sanpham->gianhap = $request->gianhap;
        $sanpham->giaban = $request->giaban;
        $sanpham->soluong = $request->soluong;
        $sanpham->hinhanh = $request->hinhanh;
        $sanpham->trangthai = $request->trangthai;
        $sanpham->ngaynhap = $request->ngaynhap;
        $sanpham->manhomsp = $request->manhomsp;
        $sanpham->mancc = $request->mancc;
        $sanpham->save();
        
        return redirect('admin/sanpham/them')->with('thongbao','Thêm Thành Công');
     }
    public function getSua(){
        return view('admin.sanpham.sua');
    }
}
