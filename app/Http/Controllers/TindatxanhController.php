<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tindatxanh;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
class TindatxanhController extends Controller
{
    public function tintuc()
    {
          $tindatxanh = DB::table('tindatxanh')->orderBy('updated_at', 'desc')->paginate(6); 
          return view('tindatxanh.tindatxanh',compact('tindatxanh'));
    }
    public function quanlybaiviet()
    {
        $baiviet = DB::table('tindatxanh')->paginate(12); 
        return view('tindatxanh.quanlybaiviet',compact('baiviet'));
    }
    public function thembaiviet()
         {
            return view("tindatxanh.thembaiviet");
         }
    public function luubaiviet(Request $request)
        {
            $tdx = new Tindatxanh;
            $tdx->title=$request->txt_title;
            $tdx->noidung=$request->txt_noidung;
            $tdx->tag=$request->txt_hagtag;
            $tdx->hinh=$request->txt_hinh;
            $tdx->save();
            return redirect()->route('quanlybaiviet')->with('thongbao','Đăng bài viết thành công');        
             
             
           
        }
        public function suabaiviet($id)
          {
             $tdx=DB::table('tindatxanh')->where('id',$id)->first();
             return view('tindatxanh.suabaiviet',compact('tdx'));
          }

          public function capnhatbaiviet($id,Request $request)
          {
            $tdx = Tindatxanh::find($id);
            $file=$request->file('txt_hinh');
            if($file)
             {
                $name = $file->getClientOriginalName();
                $tdx->title = $request->input('txt_title');
                $tdx->noidung = $request->input('txt_noidung');
                $tdx->hinh=$name; 
                $tdx->update();
                return redirect()->route('quanlybaiviet')->with('thongbao','Cập nhật bài viết thành công');  

             }
            else
            {
                $tdx->title = $request->input('txt_title');
                $tdx->noidung = $request->input('txt_noidung');
                
                $tdx->update();
                return redirect()->route('quanlybaiviet')->with('thongbao','Cập nhật bài viết thành công');  
            }
                 
                
    }
    public function xoabaiviet($id)
    {
      DB::table('tindatxanh')->where('id', $id)->delete();
      return redirect()->route('quanlybaiviet')->with('thongbao','Xóa bài viết thành công');
      
    }
    public function chitietbaiviet($id)
    {
       $tt=DB::table('tindatxanh')->where('id',$id)->first();
       return view('tindatxanh.chitietbaiviet',compact('tt'));
    }

}
