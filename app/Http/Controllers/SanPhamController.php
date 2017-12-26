<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\DanhMuc;
use App\NhaCungCap;

class SanPhamController extends Controller
{
    public function getDanhSach(){
        $sanpham = SanPham::all();
        return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }
    public function getThem(){
        $nhomsp = DanhMuc::all();
        $nhacungcap = NhaCungCap::all();
        return view('admin.sanpham.them',['nhomsp' => $nhomsp, 'nhacungcap'=>$nhacungcap]);
    }
     public function postThem(Request $request){
        $this->validate($request, [
            'tensp' => 'required|min:2|max:50',
            'chitiet' => 'required|min:2|max:500',
            'gianhap' => 'required|min:2|max:50',
            'giaban' => 'required|min:2|max:50',
            'soluong' => 'required|min:2|max:50',
            'hinhanh' => 'required',
            'trangthai' => 'required|min:2|max:50',
            'ngaynhap' => 'required|min:2|max:50',
            'manhomsp' => 'required|max:12',
            'mancc' => 'required|min:1|max:100',
        ],
            
        [
            'tensp.required' => 'Bạn Chưa Nhập Tên Sản Phẩm',
            'tensp.min' => 'Tên Sản Phẩm Cấp Quá Ngắn',
            'tensp.max' => 'Tên Sản Phẩm Cấp Quá Dài',
            'chitiet.required' => 'Bạn Chưa Nhập Chi tiết',
            'chitiet.min' => 'Tên Quốc Gia Quá Ngắn',
            'chitiet.max' => 'Tên Quốc Gia Quá Dài',
            'hinhanh.required' => 'Bạn Chưa Chọn Hình ảnh',
            'trangthai.required' => 'Bạn Chưa Nhập Trạng Thái',
            'ngaynhap.required' => 'Bạn Chưa Nhập Ngày',
            'manhomsp.required' => 'Bạn Chưa Nhập Mã Nhóm Sản Phẩm',
            'mancc.required' => 'Bạn Chưa Nhập Mã Nhà Cung Cấp',
            
            
        ]);
        $sanpham = new SanPham();
        $sanpham->tensp = $request->tensp;
        $sanpham->chitiet = $request->chitiet;
        $sanpham->gianhap = $request->gianhap;
        $sanpham->giaban = $request->giaban;
        $sanpham->soluong = $request->soluong;
        $sanpham->trangthai = $request->trangthai;
        $sanpham->ngaynhap = $request->ngaynhap;
        $sanpham->manhomsp = $request->nhomsp;
        $sanpham->mancc = $request->nhacungcap;
        if($request->hasFile('hinhanh'))
        {
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/sanpham/them')->with('loi','Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_". $name;
            while(file_exists("upload/images".$hinh))
            {
                $hinh = str_random(4)."_". $name;
            }
            $file->move("upload/images".$hinh);
            $sanpham->hinhanh = $hinh;
        }else{
            $sanpham->hinhanh = "";
        }
        $sanpham->save();
        
        return redirect('admin/sanpham/them')->with('thongbao','Thêm Thành Công');
     }
    public function getSua($id){
        $nhomsp = DanhMuc::all();
        $nhacungcap = NhaCungCap::all();
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.sua',['nhomsp'=>$nhomsp, 'nhacungcap'=>$nhacungcap, 'sanpham'=>$sanpham]);
    }
    public function postSua(Request $request, $id){
        $this->validate($request, [
            'tensp' => 'required|min:2|max:50',
            'chitiet' => 'required|min:2|max:500',
            'gianhap' => 'required|min:2|max:50',
            'giaban' => 'required|min:2|max:50',
            'soluong' => 'required|min:2|max:50',
            'hinhanh' => 'required',
            'trangthai' => 'required|min:2|max:50',
            'ngaynhap' => 'required|min:2|max:50',
            'manhomsp' => 'required|max:12',
            'mancc' => 'required|min:5|max:100',
        ],
            
        [
            'tensp.required' => 'Bạn Chưa Nhập Tên Sản Phẩm',
            'tensp.min' => 'Tên Sản Phẩm Cấp Quá Ngắn',
            'tensp.max' => 'Tên Sản PhẩmCấp Quá Dài',
            'chitiet.required' => 'Bạn Chưa Nhập Chi tiết',
            'chitiet.min' => 'Tên Quốc Gia Quá Ngắn',
            'chitiet.max' => 'Tên Quốc Gia Quá Dài',
            'hinhanh.required' => 'Bạn Chưa Chọn Hình ảnh',
            'trangthai.required' => 'Bạn Chưa Nhập Trạng Thái',
            'ngaynhap.required' => 'Bạn Chưa Nhập Ngày',
            'manhomsp.required' => 'Bạn Chưa Nhập Mã Nhóm Sản Phẩm',
            'mancc.required' => 'Bạn Chưa Nhập Mã Nhà Cung Cấp',
            
            
        ]);
        $sanpham = SanPham::find($id);
        $sanpham->tensp = $request->tensp;
        $sanpham->chitiet = $request->chitiet;
        $sanpham->gianhap = $request->gianhap;
        $sanpham->giaban = $request->giaban;
        $sanpham->soluong = $request->soluong;
        $sanpham->trangthai = $request->trangthai;
        $sanpham->ngaynhap = $request->ngaynhap;
        $sanpham->manhomsp = $request->nhomsp;
        $sanpham->mancc = $request->nhacungcap;
        if($request->hasFile('hinhanh'))
        {
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/sanpham/them')->with('loi','Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_". $name;
            while(file_exists("upload/images".$hinh))
            {
                $hinh = str_random(4)."_". $name;
            }
            $file->move("upload/images".$hinh);
            unlink("upload/images".$sanpham->hinhanh);
            $sanpham->hinhanh = $hinh;
        }
        $sanpham->save();
        return redirect('admin/sanpham/sua'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $sanpham = SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thong bao','Xóa thành công');
    }
}
