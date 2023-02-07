<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\MonhocController;
use App\Http\Controllers\TindatxanhController;
use App\Http\Controllers\TintucthitruongController;
use App\Http\Controllers\NhamauController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\UserController;
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
//Đường dẫn demo test thử trang

//LOAD DỮ LIỆU TRANG CHỦ
Route::get('/avatar',function()
{
  return view('gioithieu.avatar');
}
);


Route::get('/meta',[TintucthitruongController::class,'meta'])
->name('meta');

Route::get('/',function()
{
    return view('index');
})
->name('index');

//Đường dẫn Auth
Route::get('/php-admin',function()
{
    return view('auth.login');
})
->name('dangnhap');
Route::get('/dangky',function()
{
    return view('auth.dangky');
})
->name('dangky');
Route::post('/xulydangky',[UserController::class,'xulydangky'])
->name('xulydangky');
Route::get('/thoat',[UserController::class,'thoat'])
->name('thoat');
Route::post('/xulydangnhap',[UserController::class,'xulydangnhap'])
->name('xulydangnhap');

Route::get('/index',function()
{
    return view("index");

})->name('trangchu');
//Đường dẫn trang chủ mới
Route::get('/',[TintucthitruongController::class,'news'])
->name('index');

//Đường dẫn khu vực trang tin tuc
Route::get('/tindatxanh',function()
{
    return view('tintuc/tindatxanh');
    
})
->name('tindatxanh');
Route::get('/gioithieu',function()
{
    return view('gioithieu/gioithieu');
    
})
->name('gioithieu');
  // phân quyền tin tức đất xanh+ tin tức thị trường
  Route::group(['middleware'=>'admin'],function()
  {
  
    Route::get('/thembaiviet',[TindatxanhController::class,'thembaiviet'])
    ->name('thembaiviet');
    Route::post('/luubaiviet',[TindatxanhController::class,'luubaiviet'])
    ->name('luubaiviet');
    Route::get('/suabaiviet/{id}',[TindatxanhController::class,'suabaiviet'])
    ->name('suabaiviet');
    Route::post('/capnhatbaiviet/{id}',[TindatxanhController::class,'capnhatbaiviet'])
    ->name('capnhatbaiviet');
    Route::post('/capnhatanh/{id}',[TindatxanhController::class,'capnhatanh'])
    ->name('capnhatanh');
    Route::get('/xoabaiviet/{id}',[TindatxanhController::class,'xoabaiviet'])
    ->name('xoabaiviet');         
    Route::get('/quanlybaiviet',[TindatxanhController::class,'quanlybaiviet'])
        ->name('quanlybaiviet');
 // code tin tuc thi truong
 Route::get('/thembaivietthitruong',[TintucthitruongController::class,'thembaivietthitruong'])
 ->name('thembaivietthitruong');
 Route::post('/luubaivietthitruong',[TintucthitruongController::class,'luubaivietthitruong'])
 ->name('luubaivietthitruong');
 Route::get('/suabaivietthitruong/{id}',[TintucthitruongController::class,'suabaivietthitruong'])
 ->name('suabaivietthitruong');
 Route::post('/capnhatbaivietthitruong/{id}',[TintucthitruongController::class,'capnhatbaivietthitruong'])
 ->name('capnhatbaivietthitruong');
 Route::post('/capnhatanhthitruong/{id}',[TintucthitruongController::class,'capnhatanhthitruong'])
 ->name('capnhatanh');
 Route::get('/xoabaivietthitruong/{id}',[TintucthitruongController::class,'xoabaivietthitruong'])
 ->name('xoabaivietthitruong');     
 Route::get('/quanlybaivietthitruong',[TintucthitruongController::class,'quanlybaivietthitruong'])
 ->name('quanlybaivietthitruong');
        
    });
    Route::get('/chitietbaiviet/{id}',[TindatxanhController::class,'chitietbaiviet'])
    ->name('chitietbaiviet');
    Route::get('/tindatxanh',[TindatxanhController::class,'tintuc'])
    ->name('tindatxanh');


 //tin tức thị trường
 Route::get('/chitietbaivietthitruong/{id}',[TintucthitruongController::class,'chitietbaivietthitruong'])
 ->name('chitietbaivietthitruong');
 Route::get('/tintucthitruong',[TintucthitruongController::class,'tintucthitruong'])
 ->name('tintucthitruong');
 


//thong tin nha mau
Route::get('/nhamau',[NhamauController::class,'nhamau'])
->name('nhamau');

//thong tin lien he
Route::get('/lienhe',[LienheController::class,'thongtinlienhe'])
->name('lienhe');
Route::post('/luuthongtin',[LienheController::class,'capnhatthongtin'])
->name('luuthongtin');
Route::get('/thongbao',[LienheController::class,'thongbao'])
->name('thongbao');










































Route::get('/trangchu',function()
{
    return view('trangchu');
}
)
->name('trangchinh');

Route::get('/trangchinh',[SinhvienController::class,'trangchinh'])
->name('trangchinh');

Route::get('/qlsinhvien',function()
{
    return view('qlsinhvien');
})->name('qlsinhvien');

Route::get('/qldaotao',function()
{
    return view('qldaotao');
})->name('qldaotao');
Route::get('/qlhethong',function()
{
    return view('qlhethong');
})->name('qlhethong');
//Danh mục Quản Lý Sinh Vien


Route::get('/sinhvien',[SinhvienController::class,'index'])
->name('sinhvien');

Route::get('/create',[SinhvienController::class,'create'])
->name('create'); 

Route::post('/store',[SinhvienController::class,'store'])
->name('store');
Route::get('/edit/{id}',[SinhvienController::class,'edit'])
->name('edit');
Route::post('/update/{id}',[SinhvienController::class,'update'])
->name('update');
Route::get('/delete/{id}',[SinhvienController::class,'delete'])
->name('delete');
Route::get('/submenu',[SinhvienController::class,'submenu'])
->name('submenu');






//Danh mục Quản Lý Khoa
Route::get('/khoa',[KhoaController::class,'index'])
->name('khoa');
Route::get('/themkhoa',[KhoaController::class,'themkhoa'])
->name('themkhoa');
Route::post('/luu',[KhoaController::class,'luu'])
->name('luu');
Route::get('/sua/{id}',[KhoaController::class,'sua'])
->name('sua');
Route::post('/capnhat/{id}',[KhoaController::class,'capnhat'])
->name('capnhat');
Route::get('xoa/{id}',[KhoaController::class,'xoa'])
->name('xoa');


//Danh mục Quản Lý MonHoc
Route::get('/thongtinmon',[MonhocController::class,'thongtinmon'])
->name('thongtinmon');
Route::get('/themmon',[MonhocController::class,'themmon'])
->name('themmon');
Route::post('/luumon',[MonhocController::class,'luumon'])
->name('luumon');
Route::get('/suamon/{id}',[MonhocController::class,'suamon'])
->name('suamon');
Route::post('/capnhatmon/{id}',[MonhocController::class,'capnhatmon'])
->name('capnhatmon');
Route::get('xoamon/{id}',[MonhocController::class,'xoamon'])
->name('xoamon');