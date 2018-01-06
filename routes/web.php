<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\NhaCungCap;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
    Route::group(['prefix' => 'danhmuc'],function(){
        Route::get('danhsach','DanhMucController@getDanhSach');
        Route::get('sua/{id}','DanhMucController@getSua');
        Route::post('sua/{id}','DanhMucController@postSua');
        Route::get('them','DanhMucController@getThem');
        Route::post('them','DanhMucController@postThem');
        Route::get('xoa/{id}','DanhMucController@getXoa');
    });
    Route::group(['prefix' => 'sanpham'],function(){
        Route::get('danhsach','SanPhamController@getDanhSach');
        Route::get('sua/{id}','SanPhamController@getSua');
        Route::post('sua/{id}','SanPhamController@postSua');
        Route::get('them','SanPhamController@getThem');
        Route::post('them','SanPhamController@postThem');
        Route::get('xoa/{id}','SanPhamController@getXoa');
    });
    Route::group(['prefix' => 'chitiet'],function(){
        Route::get('danhsach','CTHDController@getDanhSach');
        Route::get('sua/{id}','CTHDController@getSua');
        Route::post('sua/{id}','CTHDController@postSua');
        Route::get('them','CTHDController@getThem');
        Route::post('them','CTHDController@postThem');
        Route::get('xoa/{id}','CTHDController@getXoa');
    });
    Route::group(['prefix' => 'hoadon'],function(){
        Route::get('danhsach','HoaDonController@getDanhSach');
        Route::get('sua/{id}','HoaDonController@getSua');
        Route::post('sua/{id}','HoaDonController@postSua');
        Route::get('them','HoaDonController@getThem');
        Route::post('them','HoaDonController@postThem');
        Route::get('xoa/{id}','HoaDonController@getXoa');
    });
    Route::group(['prefix' => 'khachhang'],function(){
        Route::get('danhsach','KhachHangController@getDanhSach');
        Route::get('sua/{id}','KhachHangController@getSua');
        Route::post('sua/{id}','KhachHangController@postSua');
        Route::get('them','KhachHangController@getThem');
        Route::post('them','KhachHangController@postThem');

        Route::get('xoa/{id}','KhachHangController@getXoa');

    });
    Route::group(['prefix' => 'nhacungcap'],function(){
        Route::get('danhsach','NhaCungCapController@getDanhSach');
        Route::get('sua/{id}','NhaCungCapController@getSua');
        Route::post('sua/{id}','NhaCungCapController@postSua');
        Route::get('them','NhaCungCapController@getThem');
        Route::post('them','NhaCungCapController@postThem');
        Route::get('xoa/{id}','NhaCungCapController@getXoa');
    });
    Route::group(['prefix' => 'nhanvien'],function(){
        Route::get('danhsach','NhanVienController@getDanhSach');
        Route::get('sua/{id}','NhanVienController@getSua');
        Route::post('sua/{id}','NhanVienController@postSua');
        Route::get('them','NhanVienController@getThem');
        Route::post('them','NhanVienController@postThem');
        Route::get('xoa/{id}','NhanVienController@getXoa');
    });
    Route::group(['prefix' => 'thanhvien'],function(){
        Route::get('danhsach','ThanhVienController@getDanhSach');
        Route::get('sua/{id}','ThanhVienController@getSua');
        Route::post('sua/{id}','ThanhVienController@postSua');
        Route::get('them','ThanhVienController@getThem');
        Route::post('them','ThanhVienController@postThem');
        Route::get('xoa/{id}','ThanhVienController@getXoa');
    });
});


Route::get('trangchu','PagesController@getIndex');
Route::get('index',[
    'as'=>'trangchu',
    'uses'=>'PagesController@getIndex']
    );

Route::get('giohang', function (){
   return view('pages.giohang');
});

Route::get('thanhtoan', function (){
    return view('pages.thanhtoan');
});

        
Route::get('gioithieu', function (){
    return view('pages.gioithieu');
});
        
Route::get('chitietsanpham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PagesController@getChiTiet']
    );
Route::get('dangnhap',[
    'as'=>'login',
    'uses'=>'PagesController@getLogin']
    );
Route::post('dangnhap',[
    'as'=>'login',
    'uses'=>'PagesController@postLogin']
    );
Route::get('dangki',[
    'as'=>'signin',
    'uses'=>'PagesController@getSignin']
    );
Route::post('dangki',[
    'as'=>'signin',
    'uses'=>'PagesController@postSignin']
    );
Route::get('dangxuat',[
    'as'=>'logout',
    'uses'=>'PagesController@postLogout']
    );
Route::get('sanpham/{type}',[
    'as'=>'nhomsp',
    'uses'=>'PagesController@getSanPham']
    );
Route::get('admins',['as' => 'test','uses' =>'ThanhVienController@getdanhsach']);



