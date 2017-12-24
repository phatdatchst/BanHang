<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhaCungCap;

class NhaCungCapController extends Controller
{
    //
    public function getDanhSach(){
        $nhacungcap = NhaCungCap::all();
        return view('admin.nhacungcap.danhsach',['nhacungcap'=>$nhacungcap]);
    }
    public function getThem(){
        return view('admin.nhacungcap.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenncc'=>'required|min:2|max:50',
            'quocgia'=>'required|min:2|max:50',
            'sdt'=>'required|max:12',
            'diachi'=>'required|min:2|max:50',
        ],[
            'tenncc.required'=>'Bạn chưa nhập tên nhà cung cấp',
            'tenncc.min'=>'Tên nhà cung cấp quá ngắn',
            'tenncc.max'=>'Tên nhà cung cấp quá dài',
            'quocgia.required'=>'Bạn chưa nhập quốc gia',
            'quocgia.min'=>'tên Quốc gia quá ngắn',
            'quocgia.max'=>'tên Quốc gia quá dài',
            'diachi.required'=>'Bạn chưa nhập địa chỉ',
            'diachi.min'=>'Địa chỉ quá ngắn',
            'diachi.max'=>'Địa chỉ quá dài',
        ]);
        $nhacungcap = new NhaCungCap();
        $nhacungcap->tenncc = $request->tenncc;
        $nhacungcap->quocgia = $request->quocgia;
        $nhacungcap->sdt = $request->sdt;
        $nhacungcap->diachi = $request->diachi;
        $nhacungcap->save();
    }
    public function getSua(){
        return view('admin.nhacungcap.sua');
    }
}
