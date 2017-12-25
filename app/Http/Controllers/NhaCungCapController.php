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
        return redirect('admin/nhacungcap/them')->with('thong bao', 'thêm thành công');
    }
    public function getSua($id){
        $nhacungcap = NhaCungCap::find($id);
        return view('admin.nhacungcap.sua',['nhacungcap'=>$nhacungcap]);
    }
    public function postSua(Request $request, $id){
        $this->validate($request, [
            'tenncc'=>'required|unique:nhacungcap, tenncc|min:2|max:50'
        ],[
            'tenncc.required' => 'Bạn Chưa Nhập Tên Nhà Cung Cấp',
            'tenncc.unique' => 'Tên Nhà Cung Cấp Đã Tồn Tại',
            'tenncc.min' => 'Tên Nhà Cung Cấp Quá Ngắn',
            'tenncc.max' => 'Tên Nhà Cung Cấp Quá Dài',
        ]);
        $nhacungcap = NhaCungCap::find($id);
        $nhacungcap->tenncc = $request->tenncc;
        $nhacungcap->quocgia = $request->quocgia;
        $nhacungcap->sdt = $request->sdt;
        $nhacungcap->diachi = $request->diachi;
        $nhacungcap->save();
        return redirect('admin/nhacungcap/sua'.$id)->with('thong bao','sửa thành công');
    }
    public function getXoa($id){
        $nhacungcap = NhaCungCap::find($id);
        $nhacungcap->delete();
        return redirect('admin/nhacungcap/danhsach')->with('thong bao','xóa thành công');
    }
    
    
}
