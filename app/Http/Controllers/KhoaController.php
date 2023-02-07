<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khoa;
use DB;

class KhoaController extends Controller
{
    public function index()
    {
         // $sinhvien = DB::table('sinhviens')->get(); có thể dùng cách này
         $khoa=Khoa::paginate(3);
              return view('khoa.khoa',compact('khoa'))->with('i',(request()->input('page',1)-1)*3);
    }
    public function themkhoa()
    {
        return view('khoa.themkhoa');
    }
    public function luu(Request $request)
    {
       // Khoa::create($request->all());
        $kh = new Khoa;
         $kh->makh=$request->txtmakh;
         $kh->tenkh=$request->txttenkh;
         $kh->save();
        return redirect()-> route('khoa')->with('thongbao','Thêm Khoa thành công');               
       
 
}
public function sua($id)
{
  $data = DB::table('khoas')->where('id', $id)->first();
  return view('khoa.suakhoa', compact('data')); 
      
}
public function xoa($id)
   {
       DB::table('khoas')->where('id',$id)->delete();
       return redirect()->route('khoa')->with('thongbao','Xóa Khoa thành công');
   }
   public function capnhat($id,Request $request)
     {
        DB::table('khoas')->where('id',$id)->update([
          'makh'=>$request->txtmakh,
          'tenkh'=>$request->txttenkh,
        ]);
        return redirect()->route('khoa')->with('thongbao','Cập nhật Khoa thành công');
     }
}
