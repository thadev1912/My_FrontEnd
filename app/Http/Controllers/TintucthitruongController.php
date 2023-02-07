<?php

namespace App\Http\Controllers;
use App\Models\Tintucthitruong;
use Illuminate\Http\Request;
use DB;
class TintucthitruongController extends Controller
{
    public function tintucthitruong()
    {
          $tintucthitruong = DB::table('tintucthitruong')->orderBy('updated_at', 'desc')->paginate(6); 
          return view('tintucthitruong.tintucthitruong',compact('tintucthitruong'));
    }
    public function news()
    {
          $news = DB::table('tintucthitruong')->orderBy('updated_at', 'desc')->paginate(3); 
          return view('index',compact('news'));
    }
    public function meta(Request $request)
    {
          $meta = DB::table('tintucthitruong')->first(); 
       
             foreach($meta as $key=> $val)
             {
               $tieude=$val->title;
               dd($tieude);
             }
          
          return view('meta',compact('meta'));
    }

    public function quanlybaivietthitruong()
    {
        $thitruong = DB::table('tintucthitruong')->paginate(12); 
        return view('tintucthitruong.quanlybaivietthitruong',compact('thitruong'));
    }
    public function thembaivietthitruong()
         {
            return view("tintucthitruong.thembaivietthitruong");
         }
    public function luubaivietthitruong(Request $request)
        {
           $tdx = new Tintucthitruong;
            $tdx->title=$request->txt_title; 
            $tdx->noidung=$request->txt_noidung; 
            $tdx->tag=$request->txt_hagtag;   
            $tdx->hinh=$request->txt_hinh;
            $tdx->save();
            return redirect()->route('quanlybaivietthitruong')->with('thongbao','Đăng bài viết thành công');        
             
             
           
        }
        public function suabaivietthitruong($id)
          {
             $ttt=DB::table('tintucthitruong')->where('id',$id)->first();
             return view('tintucthitruong.suabaivietthitruong',compact('ttt'));
          }

          public function capnhatbaivietthitruong($id,Request $request)
          {
            $tdx = Tintucthitruong::find($id);
            $file=$request->file('txt_hinh');
            if($file)
             {
                $name = $file->getClientOriginalName();
                $tdx->title = $request->input('txt_title');
                $tdx->noidung = $request->input('txt_noidung');
                $tdx->tag = $request->input('txt_hagtag');
                $tdx->hinh=$name; 
                $tdx->update();
                return redirect()->route('quanlybaivietthitruong')->with('thongbao','Cập nhật bài viết thành công');  

             }
            else
            {
                $tdx->title = $request->input('txt_title');
                $tdx->noidung = $request->input('txt_noidung');
                $tdx->tag = $request->input('txt_hagtag');
                $tdx->update();
                return redirect()->route('quanlybaivietthitruong')->with('thongbao','Cập nhật bài viết thành công');  
            }
                 
                
    }
    public function xoabaivietthitruong($id)
    {
      DB::table('tintucthitruong')->where('id', $id)->delete();
      return redirect()->route('quanlybaivietthitruong')->with('thongbao','Xóa bài viết thành công');
      
    }
    public function chitietbaivietthitruong($id)
    {
       $ttt=DB::table('tintucthitruong')->where('id',$id)->first();
       return view('tintucthitruong.chitietbaivietthitruong',compact('ttt'));
    }

}
