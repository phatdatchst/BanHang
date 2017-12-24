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
            'tennhom' => 'required|min:5|max:100|unique:nhomsp,tennhom'
        ],
            
        [
            'tennhom.required' => 'Bạn Chưa Nhập Tên Danh Mục',
            'tennhom.unique' => 'Tên Danh Mục Đã Tồn Tại',
            'tennhom.min' => 'Tên Thể Loại Quá Ngắn',
            'tennhom.max' => 'Tên Thể Loại Quá Dài',
        ]);
        $nhomsp = new DanhMuc;
        $nhomsp->tennhom = $request->tennhom;
        $nhomsp->save();
        
        return redirect('admin/danhmuc/them')->with('thongbao','Thêm Thành Công');
    }
    public function getSua($id){
        $nhomsp = DanhMuc::find($id);
        return view('admin.danhmucsanpham.sua',['nhomsp' => $nhomsp]);
    }
    public function postSua(Request $request,$id){
        $nhomsp = DanhMuc::find($id);
        $this->validate($request, [
            'tennhom' => 'required|unique:nhomsp,tennhom|min:5|max:100'
        ],
        [
            'tennhom.required' => 'Bạn Chưa Nhập Tên Danh Mục',
            'tennhom.unique' => 'Tên Danh Mục Đã Tồn Tại',
            'tennhom.min' => 'Tên Thể Loại Quá Ngắn',
            'tennhom.max' => 'Tên Thể Loại Quá Dài',
        ]);
        $nhomsp->tennhom = $request->tennhom;
        $nhomsp->save();
        return redirect('admin/danhmuc/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function getXoa($id){
        $nhomsp = DanhMuc::find($id);
        $nhomsp->delete();
        return redirect('admin/danhmucsanpham/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
