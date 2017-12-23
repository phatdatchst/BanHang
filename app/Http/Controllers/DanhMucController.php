<?php

namespace App\Http\Controllers;
use App\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function getDanhSach(){
        $nhomsp = DanhMuc::all();
        return view('admin.danhmucsanpham.danhsach',['nhomsp' => $nhomsp]);
    }
    public function getThem(){
        return view('admin.danhmucsanpham.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tennhom' => 'required|min:5|max:100'
        ],
            
        [
            'tennhom.required' => 'Bạn Chưa Nhập Tên Danh Mục',
            'tennhom.min' => 'Tên Thể Loại Quá Ngắn',
            'tennhom.max' => 'Tên Thể Loại Quá Dài',
        ]);
        $nhomsp = new DanhMuc;
        $nhomsp->tennhom = $request->tennhom;
        $nhomsp->save();
        
        return redirect('admin/danhmuc/them')->with('thongbao','Thêm Thành Công');
    }
    public function getSua(){
    
    }
}
