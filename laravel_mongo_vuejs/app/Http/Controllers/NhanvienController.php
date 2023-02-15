<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhanvien;
class NhanvienController extends Controller
{
    public function nhanvien()
    {
        $data = nhanvien::all();
        if($data)
             {
                return response()->json([
                    'data'=>$data,
                    'status'=>200,
                    'messege'=>"lay du lieu thanh cong",
                ]);
             }
        else
            {
                return response()->json([
                    'data'=>null,
                    'status'=>404,
                    'messege'=>"lay du lieu khong thanh cong",
                ]);

            }
    }
    public function luunhanvien(Request $request)
     {
        $data=nhanvien::create([
           'ma_nhanvien'=>$request->ma_nhanvien,
           'ten_nhanvien'=>$request->ten_nhanvien,
           'gioitinh'=>$request->gioitinh,
           'diachi'=>$request->diachi,
           'sdt'=>$request->sdt,
        ]);
        if($data)
             {
                return response()->json([

                   'data'=>$data,
                   'status'=>200,
                   'messege'=>'Them moi thanh cong!!!',

                ]);
             }
             else
             {
                return response()->json([
                    'data'=>null,
                    'status'=>400,
                    'messege'=>"Ket noi bi loi!!!"
         
                ]);
             }
     }
     public function suanhanvien($id)
      {
        $data = nhanvien::find($id);
        if($data)
          {
            return response()->json([
                 'data'=>$data,
                 'status'=>200,
                 'messege'=>"Ket noi thanh cong!!!",
                                   ]);
          }
        else
         {
            return response()->json([
                 'data'=>null,
                 'status'=>400,
                 'messege'=>"Ket noi loi!!!",
                                   ]);
         }
      }
      public function capnhatnhanvien(Request $request,$id)
      {
        $data=nhanvien::find($id)->update([
            'ma_nhanvien'=>$request->ma_nhanvien,
           'ten_nhanvien'=>$request->ten_nhanvien,
           'gioitinh'=>$request->gioitinh,
           'diachi'=>$request->diachi,
           'sdt'=>$request->sdt,  
 
        ]);
        if($data)
             {
                       return response()->json([
                       'data'=>'$data',
                       'status'=>200,
                       'messege'=>'Cap nhat thanh cong!!!',

                ]);
            }
        else
            {
                       return response()->json([
                       'data'=>null,
                       'status'=>200,
                       'messege'=>'Ket noi loi!!!',

                ]);

             }
        }
        public function xoanhanvien($id)
         {
            $data=nhanvien::find($id)->delete();
            if($data)
                 {
                    return response()->json([
                      'data'=>true,
                      'status'=>200,
                      'messege'=>'Xoa thanh cong!!!'
                    ]);
                 }
                 else
                 {
                    return response()->json([
                      'data'=>false,
                      'status'=>400,
                      'messege'=>'Vui long kiem tra lai du lieu!!!'
                    ]);
                 }

         }
      }

