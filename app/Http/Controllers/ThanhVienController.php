<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThanhVien;

class ThanhVienController extends Controller
{
    public function getDanhSach(){
        $thanhvien = ThanhVien::all();
        return view('admin.thanhvien.danhsach',['thanhvien'=>$thanhvien]);
    }
    public function getThem(){
        return view('admin.thanhvien.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'makh'=>'required|min:2|max:10',
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
        $thanhvien = new ThanhVien();
        $thanhvien->makh = $request->makh;
        $thanhvien->tentv = $request->tentv;
        $thanhvien->taikhoan = $request->taikhoan;
        $thanhvien->matkhau = $request->matkhau;
        $thanhvien->diemtichluy = $request->diemtichluy;
        $thanhvien->save();
        return redirect('admin/thanhvien/them')->with('thongbao','Thêm Thành Công');
        
    }
    public function getSua($id){
        $thanhvien = ThanhVien::find($id);
        return view('admin.thanhvien.sua',['thanhvien'=>$thanhvien]);
    }
    public function postSua(Request $request, $id){
        $thanhvien = ThanhVien::find($id);
        $thanhvien->makh = $request->makh;
        $thanhvien->tentv = $request->tentv;
        $thanhvien->taikhoan = $request->taikhoan;
        $thanhvien->matkhau = $request->matkhau;
        $thanhvien->diemtichluy = $request->diemtichluy;
        $thanhvien->save();
        return redirect('admin/thanhvien/sua')->with('thong bao', 'Sửa thành công');
    }
    public function getXoa($id){
        $thanhvien = ThanhVien::find($id);
        $thanhvien->delete();
        return redirect('admin/thanhvien/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
