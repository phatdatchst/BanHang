<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThanhVien;
use App\KhachHang;

class ThanhVienController extends Controller
{
    public function getDanhSach(){
        $thanhvien = ThanhVien::all();
        return view('admin.thanhvien.danhsach',['thanhvien'=>$thanhvien]);
    }
    public function getThem(){
        $khachhang = KhachHang::all();
        return view('admin.thanhvien.them',['khachhang'=>$khachhang]);
    }
    public function postThem(Request $request){
        $this->validate($request, [
           
            'tentv'=>'required|min:2:max:30',
            'taikhoan'=>'required|min:2:max:30',
            'matkhau'=>'required|min:2:max:30',
            'diemtichluy'=>'required|min:2:max:30',
        ],[
            
            'tentv.required' =>'Bạn chưa nhập tên thành viên',
            'tentv.min'=>'Tên thành viên quá ngắn',
            'tentv.max'=>'Tên thành viên quá dài',
            'taikhoan.required' =>'Bạn chưa nhập tài khoản',
            'taikhoan.min'=>'Tài khoản quá ngắn',
            'taikhoan.max'=>'Tài khoản quá dài',
            'matkhau.required' =>'Bạn chưa nhập mật khẩu',
            'matkhau.min'=>'Mật khẩu quá ngắn',
            'matkhau.max'=>'Mật khẩu quá dài',  
        ]);
        $thanhvien = new ThanhVien();
        $thanhvien->makh = $request->khachhang;
        $thanhvien->tentv = $request->tentv;
        $thanhvien->taikhoan = $request->taikhoan;
        $thanhvien->matkhau = $request->matkhau;
        $thanhvien->diemtichluy = $request->diemtichluy;
        $thanhvien->save();
        return redirect('admin/thanhvien/them')->with('thongbao','Thêm Thành Công');
        
    }
    public function getSua($id){
        $khachhang = KhachHang::all();
        $thanhvien = ThanhVien::find($id);
        return view('admin.thanhvien.sua',['thanhvien'=>$thanhvien, 'khachhang'=>$khachhang]);
    }
    public function postSua(Request $request, $id){
        $this->validate($request, [
            'makh'=>'required|min:1|max:10',
            'tentv'=>'required|min:2:max:30',
            'taikhoan'=>'required|min:2:max:30',
            'matkhau'=>'required|min:2:max:30',
            'diemtichluy'=>'required|min:2:max:30',
        ],[
            'makh.required' =>'Bạn chưa nhập mã khách hàng',
            'makh.min'=>'Mã khách hàng quá ngắn',
            'makh.max'=>'Mã khách hàng quá dài',
            'tentv.required' =>'Bạn chưa nhập tên thành viên',
            'tentv.min'=>'Tên thành viên quá ngắn',
            'tentv.max'=>'Tên thành viên quá dài',
            'taikhoan.required' =>'Bạn chưa nhập tài khoản',
            'taikhoan.min'=>'Tài khoản quá ngắn',
            'taikhoan.max'=>'Tài khoản quá dài',
            'matkhau.required' =>'Bạn chưa nhập mật khẩu',
            'matkhau.min'=>'Mật khẩu quá ngắn',
            'matkhau.max'=>'Mật khẩu quá dài',  
        ]);
        $thanhvien = ThanhVien::find($id);
        $thanhvien->makh = $request->khachhang;
        $thanhvien->tentv = $request->tentv;
        $thanhvien->taikhoan = $request->taikhoan;
        $thanhvien->matkhau = $request->matkhau;
        $thanhvien->diemtichluy = $request->diemtichluy;
        $thanhvien->save();
        return redirect('admin/thanhvien/sua')->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id){
        $thanhvien = ThanhVien::find($id);
        $thanhvien->delete();
        return redirect('admin/thanhvien/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
