<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhaCungCap;

class NhaCungCapController extends Controller
{
    //
    public function getDanhSach()
    {
        $nhacungcap = NhaCungCap::all();
        return view('admin.nhacungcap.danhsach',['nhacungcap'=>$nhacungcap]);
    }
    public function getSua()
    {
        return view('admin.nhacungcap.sua');
    }
    
    
    public function getThem()
    {
        return view('admin.nhacungcap.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenncc'=>'required|min:2|max:10',
            'quocgia'=>'required|min:2:max:30',
            'sdt'=>'required|min:2:max:30',
            'diachi'=>'required|min:2:max:30',
        ],[
            'tenncc.required' =>'Bạn chưa nhập mã khách hàng',
            'tenncc.min'=>'Mã khách hàng quá ngắn',
            'tenncc.max'=>'Mã khách hàng quá dài',
            'quocgia.required' =>'Bạn chưa nhập tên thành viên',
            'quocgia.min'=>'Tên thành viên quá ngắn',
            'quocgia.max'=>'Tên thành viên quá dài',
            'diachi.required' =>'Bạn chưa nhập tài khoản',
            'diachi.min'=>'Tài khoản quá ngắn',
            'diachi.max'=>'Tài khoản quá dài',
              
        ]);
        $nhacungcap = new NhaCungCap();
        $nhacungcap->tenncc = $request->tenncc;
        $nhacungcap->quocgia = $request->quocgia;
        $nhacungcap->sdt = $request->sdt;
        $nhacungcap->diachi = $request->diachi;
        $nhacungcap->save();
        
        
        return redirect('admin/nhacungcap/them')->with('thongbao','Thêm Thành Công');
}
}