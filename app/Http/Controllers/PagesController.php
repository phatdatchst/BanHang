<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\DanhMuc;
use App\ThanhVien;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
class PagesController extends Controller
{
    public function getIndex(){
        $nhomsp = DanhMuc::all();
        $sanpham = SanPham::all();
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
    public function getSignin() {
        return view('pages.dangki');
    }
    public function postSignin(Request $request) {
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
        return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công');
    }
    public function getLogin() {
        return view('pages.dangnhap');
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'username'=>'required',
                'password'=>'required|min:6|max:20'
            ],
            [
                'username.required'=>'Vui lòng nhập tài khoản',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'mật khẩu ít nhất  6 kí tự',
                'password.max'=>'mật khẩu vượt quá độ dài cho phép 20 kí tự'
            ]
            );
        $login = array('username'=>$request->username, 'password'=>$request->password);
        if(Auth::attempt($login)){
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng Nhập thành công']);
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng Nhập không thành công']);
        }
    }
    public function postLogout() {
        Auth::logout();
        return redirect()->route('trangchu');
    }
}
