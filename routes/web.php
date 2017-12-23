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
        Route::get('sua','DanhMucController@getSua');
        Route::get('them','DanhMucController@getThem');
        Route::post('them','DanhMucController@postThem');
    });
    Route::group(['prefix' => 'sanpham'],function(){
        Route::get('danhsach','SanPhamController@getDanhSach');
        Route::get('sua','SanPhamController@getSua');
        Route::get('them','SanPhamController@getThem');
    });
    Route::group(['prefix' => 'chitiet'],function(){
        Route::get('danhsach','CTHDController@getDanhSach');
        Route::get('sua','CTHDController@getSua');
        Route::get('them','CTHDController@getThem');
    });
    Route::group(['prefix' => 'hoadon'],function(){
        Route::get('danhsach','HoaDonController@getDanhSach');
        Route::get('sua','HoaDonController@getSua');
        Route::get('them','HoaDonController@getThem');
    });
    Route::group(['prefix' => 'khachhang'],function(){
        Route::get('danhsach','KhachHangController@getDanhSach');
        Route::get('sua','KhachHangController@getSua');
        Route::get('them','KhachHangController@getThem');
    });
    Route::group(['prefix' => 'nhacungcap'],function(){
        Route::get('danhsach','NhaCungCapController@getDanhSach');
        Route::get('sua','NhaCungCapController@getSua');
        Route::get('them','NhaCungCapController@getThem');
    });
    Route::group(['prefix' => 'nhanvien'],function(){
        Route::get('danhsach','NhanVienController@getDanhSach');
        Route::get('sua','NhanVienController@getSua');
        Route::get('them','NhanVienController@getThem');
    });
    Route::group(['prefix' => 'thanhvien'],function(){
        Route::get('danhsach','ThanhVienController@getDanhSach');
        Route::get('sua','ThanhVienController@getSua');
        Route::get('them','ThanhVienController@getThem');
    });
});


Route::get('trangchu', function (){
    return view('pages.trangchu');
});


Route::get('giohang', function (){
   return view('pages.giohang');
});

Route::get('thanhtoan', function (){
    return view('pages.thanhtoan');
});

        
Route::get('gioithieu', function (){
    return view('pages.gioithieu');
});
        
Route::get('chitietsanpham', function (){
    return view('pages.chitietsanpham');
});
Route::get('dangki', function (){
    return view('pages.dangki');
});
Route::group(['prefix'=>'admin'], function (){
    Route::group(['prefix'=>'nhacungcap'], function (){
        Route::get('danhsach', 'NhaCungCapController@getDanhSach');
        
        Route::get('sua', 'NhaCungCapController@getSua');
        
        Route::get('them', 'NhaCungCapController@getThem');
        Route::post('them','NhaCungCapController@postThem');
    });
        Route::group(['prefix'=>'nhanvien'], function (){
            Route::get('danhsach', 'NhanVienController@getDanhSach');
            Route::get('sua', 'NhanVienController@getSua');
            Route::get('them', 'NhanVienController@getThem');
        });
        Route::group(['prefix'=>'sanpham'], function (){
            Route::get('danhsach', 'SanPhamController@getDanhSach');
            Route::get('sua', 'SanPhamController@getSua');
            Route::get('them', 'SanPhamController@getThem');
        });
        Route::group(['prefix'=>'thanhvien'], function (){
            Route::get('danhsach', 'ThanhVienController@getDanhSach');
            Route::get('sua', 'ThanhVienController@getSua');
            Route::get('them', 'ThanhVienController@getThem');
        });
});
