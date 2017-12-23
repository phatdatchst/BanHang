<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
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
        echo $request->tenncc;
=======

class NhaCungCapController extends Controller
{
    public function getDanhSach(){
        
    }
    public function getThem(){
    
    }
    public function getSua(){
    
>>>>>>> 9c34850271ef5f797731a571d9bcc8e53017bc13
    }
}
