<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhulieuController;
use App\Http\Controllers\NguyenlieuController;
use App\Http\Controllers\KhoController;
use App\Http\Controllers\NhanvienController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Luu y: //khi dung put o postman ta nen dung o che x www-form


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/phulieu',[PhulieuController::class,'phulieu'])
->name('phulieu'); 
Route::get('/nguyenlieu',[NguyenlieuController::class,'nguyenlieu'])
->name('nguyenlieu'); 
// Danh Muc Kho
Route::get('/kho',[KhoController::class,'kho'])
->name('kho'); 
Route::post('/luukho',[KhoController::class,'luukho'])
->name('luukho'); 
Route::get('suakho/{id}',[KhoController::class,'suakho'])
->name('suakho'); 
Route::post('capnhat/{id}',[KhoController::class,'capnhat'])
->name('capnhat'); 
Route::delete('xoa/{id}',[KhoController::class,'xoa'])
->name('xoa'); 
Route::get('/baocao',[KhoController::class,'baocao'])
->name('baocao');
Route::get('load_makho/{id}',[KhoController::class,'load_makho'])
->name('load_makho');
Route::get('timkiem',[KhoController::class,'timkiem'])
->name('timkiem');
Route::get('goiy',[KhoController::class,'goiy'])
->name('goiy');
// Danh Muc Nhan Vien
Route::get('/nhanvien',[NhanvienController::class,'nhanvien'])
->name('nhanvien');
Route::post('/luunhanvien',[NhanvienController::class,'luunhanvien'])
->name('luunhanvien');
Route::get('/suanhanvien/{id}',[NhanvienController::class,'suanhanvien'])
->name('suanhanvien');
Route::put('/capnhatnhanvien/{id}',[NhanvienController::class,'capnhatnhanvien']) //khi dung put o postman ta nen dung o che x www-form
->name('capnhatnhanvien');
Route::delete('/xoanhanvien/{id}',[NhanvienController::class,'xoanhanvien'])
->name('xoanhanvien');

