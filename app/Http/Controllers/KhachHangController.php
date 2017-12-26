<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;

class KhachHangController extends Controller
{
    public function getDanhSach(){
        $khachhang = KhachHang::all();
        return view('admin.khachhang.danhsach',['khachhang' => $khachhang]);
    }
    public function getThem(){
        return view('admin.khachhang.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenkh' => 'required|min:5|max:100',
            'ngaysinh' => 'required',
            'diachi' => 'required|min:5|max:100',
            'email' => 'required|min:10|max:100'
        ],
    
            [
                'tenkh.required' => 'Bạn Chưa Tên Khách Hàng',
                'tenkh.min' => 'Tên Khách Hàng Quá Ngắn',
                'tenkh.max' => 'Tên Khách Hàng Quá Dài',
                'ngaysinh.required' => 'Bạn Chưa Nhập Ngày Sinh',
                'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
                'diachi.min' => 'Địa Chỉ Quá Ngắn',
                'diachi.max' => 'Địa Chỉ Quá Dài',
                'email.required' => 'Bạn Chưa Nhập Email',
                'email.min' => 'Email Quá Ngắn',
                'email.max' => 'Email Quá Dài',
            ]);
        $khachhang = new KhachHang;
        $khachhang->tenkh = $request->tenkh;
        $khachhang->ngaysinh = $request->ngaysinh;
        $khachhang->diachi = $request->diachi;
        $khachhang->email = $request->email;
        $khachhang->save();
    
        return redirect('admin/khachhang/them')->with('thongbao','Thêm Thành Công');
    }
    public function getSua($id){
        $khachhang = KhachHang::find($id);
        return view('admin.khachhang.sua',['khachhang' => $khachhang]);
    }
    public function postSua(Request $request,$id){
        $khachhang = KhachHang::find($id);
        $this->validate($request, [
            'tenkh' => 'required|min:5|max:100',
            'ngaysinh' => 'required',
            'diachi' => 'required|min:5|max:100',
            'email' => 'required|min:10|max:100'
        ],
    
            [
                'tenkh.required' => 'Bạn Chưa Tên Khách Hàng',
                'tenkh.min' => 'Tên Khách Hàng Quá Ngắn',
                'tenkh.max' => 'Tên Khách Hàng Quá Dài',
                'ngaysinh.required' => 'Bạn Chưa Nhập Ngày Sinh',
                'diachi.required' => 'Bạn Chưa Nhập Địa Chỉ',
                'diachi.min' => 'Địa Chỉ Quá Ngắn',
                'diachi.max' => 'Địa Chỉ Quá Dài',
                'email.required' => 'Bạn Chưa Nhập Email',
                'email.min' => 'Email Quá Ngắn',
                'email.max' => 'Email Quá Dài',
            ]);
        $khachhang->tenkh = $request->tenkh;
        $khachhang->ngaysinh = $request->ngaysinh;
        $khachhang->diachi = $request->diachi;
        $khachhang->email = $request->email;
        $khachhang->save();
        return redirect('admin/khachhang/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function getXoa($id){
        $khachhang = KhachHang::find($id);
        $khachhang->delete();
        return redirect('admin/khachhang/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
