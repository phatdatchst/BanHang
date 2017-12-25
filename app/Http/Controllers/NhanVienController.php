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
    public function getSua($id){
        $nhanvien = NhanVien::find($id);
        return view('admin.nhanvien.sua',['nhanvien'=>$nhanvien]);
    }
    public function postSua(Request $request, $id){
        $this->validate($request, [
            'tennv'=>'required|unique:nhanvien, tennv|min:2|max:30'
        ],[
            'tennv.required' => 'Bạn Chưa Nhập Tên Nhân Viên',
            'tennv.unique' => 'Tên Nhân Viên Đã Tồn Tại',
            'tennv.min' => 'Tên Nhân Viên Quá Ngắn',
            'tennv.max' => 'Tên Nhân Viên Quá Dài',
        ]);
        $nhanvien = NhanVien::find($id);
        $nhanvien->tennv = $request->tennv;
        $nhanvien->email = $request->email;
        $nhanvien->sdt = $request->sdt;
        $nhanvien->save();
        return redirect('admin/nhanvien/sua'.$id)->with('thong bao', 'Sửa thành công');
    }
    public function getXoa($id)
    {
        $nhanvien = NhanVien::find($id);
        $nhanvien->delete();
        return redirect('admin/nhanvien/danhsach')->with('thong bao','xóa thành công');
    }
}
