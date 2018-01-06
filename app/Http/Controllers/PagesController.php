<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\DanhMuc;
use Cart;
use Illuminate\Support\Facades\Auth;
use App\KhachHang;
use App\CTHD;
use App\HoaDon;
class PagesController extends Controller
{
    public function getIndex(){
        $nhomsp = DanhMuc::all();
        $sanpham = SanPham::all()->take(4);
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
    public function muahang($id){
        $sanpham = SanPham::where('id',$id)->first();
        Cart::add(
                array('id' => $id,'name' => $sanpham->tensp,'qty' => 1,'price' => $sanpham->giaban,'options' => array('hinhanh' => $sanpham->hinhanh))
            );
        $content = Cart::content();
        return redirect('gio-hang');
    }
    public function giohang(){
        $content = Cart::content()->toArray();
        $total = Cart::subtotal();
        return view('pages.giohang',['content' => $content,'total' => $total]);
    }
    public function xoasp($id){
        $remove = Cart::remove($id);
        return redirect('gio-hang');
    }
    public function capnhat(){
        if (Request::ajax()){
           $id = Request::get('id');
           $qty = Request::get('qty');
           Cart::update($id,$qty);
           return "ok";
        }
    }
    public function thanhtoan(){
        $cart = Cart::content()->toArray();
        $total = Cart::subtotal();
        return view('pages.thanhtoan',['cart' => $cart,'total' => $total]);
    }
    public function postthanhtoan(Request $request){
        $cart = Cart::content()->toArray();
        $khachhang = new KhachHang;
        $khachhang->tenkh = $request->tenkh;
        $khachhang->gioitinh = $request->gender;
        $khachhang->email = $request->email;
        $khachhang->diachi = $request->diachi;
        $khachhang->sdt = $request->sdt;
        $khachhang->ghichu = $request->ghichu;
        $khachhang->save();
        
        $hd = new HoaDon;
        $hd->makh = $khachhang->id;
        $hd->ngaylap = date('Y-m-d');
        $hd->thanhtien = Cart::subtotal();
        $hd->hinhthucthanhtoan = $request->payment_method;
        $hd->ghichu = $request->ghichu;
        $hd->save();
        
        foreach($cart as $values){
            $cthd = new CTHD;
            $cthd->mahd = $hd->id;
            $cthd->masp = $values['id'];
            $cthd->soluong = $values['qty'];
            $cthd->tonggia = $values['price'] * $values['qty'];
            $cthd->save();
        }
        return redirect()->back()->with('thongbao','Đặt Hàng Thành Công');
        
    }
   
}
