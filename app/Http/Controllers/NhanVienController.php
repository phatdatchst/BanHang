<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;
use App\NhaCungCap;

class NhanVienController extends Controller
{
    public function getDanhSach(){
        $nhanvien = NhanVien::all();
        return view('admin.nhanvien.danhsach',['nhanvien'=>$nhanvien]);
    }
    public function getThem(){
        return view('admin.nhanvien.them');
    }
    public function postThem(Request $request){
        $this->validate($request, 
            [
                'tennv'=>'required|min:2|max:30',
                'email'=>'required|min:2|max:30',
                'sdt'=>'required|max:12',  
            ],[
                'tennv.required' =>'Bạn chưa nhập tên nhân viên',
                'tennv.min'=>'Tên nhân viên quá ngắn',
                'tennv.max'=>'Tên nhân viên quá dài',
                'email.required' =>'Bạn chưa nhập email',
                'email.min'=>'Email quá ngắn',
                'email.max'=>'Email quá dài',     
            ]);
        $nhanvien = new NhanVien();
        $nhanvien->tennv = $request->tennv;
        $nhanvien->email = $request->email;
        $nhanvien->sdt = $request->sdt;
        $nhanvien->save();
        
        return redirect('admin/nhanvien/them')->with('thongbao','Thêm Thành Công');
    }
    public function getSua(){
        return view('admin.nhanvien.sua');
    }
}
