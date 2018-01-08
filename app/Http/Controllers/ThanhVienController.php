<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThanhVien;
use App\KhachHang;
use App\User;

class ThanhVienController extends Controller
{
    public function getDanhSach(){
        $thanhvien = User::all();
        return view('admin.thanhvien.danhsach',['thanhvien'=>$thanhvien]);
    }
    public function getadmin(){
        return view('admin.thanhvien.danhsach',['thanhvien'=>$thanhvien]);
    }
    public function getThem(){
        $khachhang = KhachHang::all();
        return view('admin.thanhvien.them',['khachhang'=>$khachhang]);
    }
    public function postThem(Request $request){
       $this->validate($request,
            [
                'name'=>'required|min:3|max:20',
                'username'=>'required|unique:users,username',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                
            ], 
            [
                'username.required'=>'Vui lòng nhập tài khoản',
                'username.unique'=>'Tài khoản đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'mật khẩu ít nhất 6 kí tự',
                'password.max'=>'mật khẩu vượt quá độ dài cho phép 20 kí tự',
                'name.required'=>'Vui lòng nhập tài khoản',
                'name.min'=>'Tên ít nhất 3 kí tự',
                'name.max'=>'Tên vượt quá độ dài cho phép 20 kí tự',
                'email.email'=>'Định dạng email không đúng',
                'email.unique'=>'Email đã có người sử dụng',
                
            ]);
        $thanhvien = new User();
        $thanhvien->name = $request->name;
        $thanhvien->username = $request->username;
        $thanhvien->email = $request->email;
        $thanhvien->password = \Illuminate\Support\Facades\Hash::make($request->password);
        $thanhvien->quyen = 0;
        $thanhvien->save();
        return redirect('admin/thanhvien/them')->with('thongbao','Thêm Thành Công');
        
    }
    public function getSua($id){
        $khachhang = KhachHang::all();
        $thanhvien = User::find($id);
        return view('admin.thanhvien.sua',['users'=>$thanhvien, 'khachhang'=>$khachhang]);
    }
    public function postSua(Request $request, $id){
        $this->validate($request,
            [
                'name'=>'required|min:3|max:20',
                'username'=>'required|unique:users,username',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                
            ], 
            [
                'username.required'=>'Vui lòng nhập tài khoản',
                'username.unique'=>'Tài khoản đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'mật khẩu ít nhất 6 kí tự',
                'password.max'=>'mật khẩu vượt quá độ dài cho phép 20 kí tự',
                'name.required'=>'Vui lòng nhập tài khoản',
                'name.min'=>'Tên ít nhất 3 kí tự',
                'name.max'=>'Tên vượt quá độ dài cho phép 20 kí tự',
                'email.email'=>'Định dạng email không đúng',
                'email.unique'=>'Email đã có người sử dụng',
                
            ]);
        $thanhvien = User::find($id);
        $thanhvien->name = $request->name;
        $thanhvien->username = $request->username;
        $thanhvien->email = $request->email;
        $thanhvien->password = \Illuminate\Support\Facades\Hash::make($request->password);
        $thanhvien->quyen = 0;
        $thanhvien->save();
        return redirect('admin/thanhvien/sua')->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id){
        $thanhvien = User::find($id);
        $thanhvien->delete();
        return redirect('admin/thanhvien/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
