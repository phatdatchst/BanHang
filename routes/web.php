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

Route::get('/', function () {
    return view('welcome');
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