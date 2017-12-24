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
            'tenncc' => 'required|min:2|max:50',
            'quocgia' => 'required|min:2|max:50',
            'sdt' => 'required|max:12',
            'diachi' => 'required|min:5|max:100',
        ],
            
        [
            'tenncc.required' => 'Bạn Chưa Nhập Tên Nhà Cung Cấp',
            'tenncc.min' => 'Tên Nhà Cung Cấp Quá Ngắn',
            'tenncctenncc.max' => 'Tên Nhà Cung Cấp Quá Dài',
            'quocgia.required' => 'Bạn Chưa Nhập Quốc Gia',
            'quocgia.min' => 'Tên Quốc Gia Quá Ngắn',
            'quocgia.max' => 'Tên Quốc Gia Quá Dài',
            'diachi.required' => 'Bạn Chưa Địa chỉ',
            'diachi.min' => 'Tên Địa chỉ Quá Ngắn',
            'diachi.max' => 'Tên Địa chỉ Quá Dài',
            
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