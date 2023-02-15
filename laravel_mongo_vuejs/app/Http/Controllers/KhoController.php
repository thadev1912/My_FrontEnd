<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kho;
class KhoController extends Controller
{
    public function kho()
    {
       $data=kho::all();       
       if($data)
          {
                 return response()->json([
                 'data'=>$data,
                 'status'=>200,
                 'messege'=>'thành công',
                 ]);
                 }
         else
         {
                 return response()->json([
                  'data'=>null,   
                  'stats'=>404,
                  'messege'=>'kết nối lỗi rồi đó',
                 ]);
         }
     }
      public function luukho(Request $request)
        {
             $data = kho::create([
               'ma_kho'=>$request->ma_kho,
               'ten_kho'=>$request->ten_kho,
               'lienhe'=>$request->lienhe,
               'diachi'=>$request->diachi,
               'sdt'=>$request->sdt,
               'quanly'=>$request->quanly,
               'ghichu'=>$request->ghichu,

             ]);             
             if($data)
             {
               return response()->json([
               'data'=>$data,
               'status'=>true,
               'messege'=>'Thêm bài viết thành công rồi cha nội_ vãi!!!',      
               ]);
             }
             else
             {
               return response()->json([
                 'status' => false,
                 'msg' =>'Vui lòng kiểm tra lại',        
                 ]);
             }
             
        }
          public function suakho($id)
        {
          $data = kho::find($id);
          if($data)
          {
                  return response()->json([
                  'data'=>$data,
                   'status'=>200,
                   'messege'=>'Lay du lieu thành công rồi kìa!!!',
                  ]);
                  }
          else
          {
                  return response()->json([
                   'data'=>null,   
                   'status'=>404,
                   'messege'=>'kết nối lỗi rồi đó',
                  ]);
          }
  
        }
        public function capnhat(Request $request,$id)
        {
             $data = kho::find($id)->update([
                'ma_kho'=>$request->ma_kho,
               'ten_kho'=>$request->ten_kho,
               'lienhe'=>$request->lienhe,
               'diachi'=>$request->diachi,
               'sdt'=>$request->sdt,
               'quanly'=>$request->quanly,
               'ghichu'=>$request->ghichu,

             ]);             
             if($data)
             {
               return response()->json([
               'data'=>$data,
               'status'=>true,
               'messege'=>'Cap nhat bài viết thành công rồi cha nội_ vãi!!!',      
               ]);
             }
             else
             {
               return response()->json([
                 'status' => false,
                 'msg' =>'Vui lòng kiểm tra lại',        
                 ]);
             }
             
        }
         public function xoa($id)
        {
           $data=kho::find($id)->delete();
           if($data)
              {
                return response()->json([
                    'data'=>$data,
                    'status'=>200,
                    'messege'=>'Đã xóa thành công rồi má ơi!!!',
                ]);
              }
            else
            {
                return response()->json([
                    'data'=>null,
                    'status'=>404,
                    'messege'=>'Vui lòng kiểm tra lại!!!',
                ]);
            }
        }

        public function baocao()
         {
            $data=kho::with('getnhanvien')->get();
            if($data)
            {
                return response()->json([
                   'data'=>$data,
                   'status'=>200,
                   'messege'=>'Lay du lieu thanh cong',

                ]);
            }
            else
            {
                    return response()->json([
                   'data'=>null,
                   'status'=>400,
                   'messege'=>'vui long kiem tra lai',

                ]);

            }
         }
         public function load_makho($id)
          {
            $data = kho::find($id)->first();
            if($data)
            {
                return response()->json([
                   'data'=>$data,
                   'status'=>200,
                   'messege'=>'Lay du lieu thanh cong',

                ]);
            }
            else
            {
                    return response()->json([
                   'data'=>null,
                   'status'=>400,
                   'messege'=>'vui long kiem tra lai',

                ]);

            }
          }
          public function timkiem(Request $request)
           {
            $search =$request->timkiem;
            
            $data=kho::where('ma_kho',$search)->get();           
             if($data)
            {
                return response()->json([
                   'data'=>$data,
                   'status'=>200,
                   'messege'=>'Lay du lieu thanh cong',

                ]);
            }
            else
            {
                    return response()->json([
                   'data'=>null,
                   'status'=>400,
                   'messege'=>'vui long kiem tra lai',

                ]);

            }

           }
           public function goiy(Request $request)
           {
            $search =$request->timkiem;
            
            $data=kho::where('ma_kho', 'LIKE', "%{$search}%")->get();           
             if($data)
            {
                return response()->json([
                   'data'=>$data,
                   'status'=>200,
                   'messege'=>'Lay du lieu thanh cong',

                ]);
            }
            else
            {
                    return response()->json([
                   'data'=>null,
                   'status'=>400,
                   'messege'=>'vui long kiem tra lai',

                ]);

            }

           }
   }

