<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Models\Monhoc;
use Illuminate\Http\Request;
use DB;
class MonhocController extends Controller
{
    //
    public function thongtinmon()
    {
       
         // $sinhvien = DB::table('sinhviens')->get(); có thể dùng cách này
         $monhoc=Monhoc::paginate(3);
return view('monhoc.thongtinmon',compact('monhoc'))->with('i',(request()->input('page',1)-1)*3);
    }

    public function themmon()
    {
        return view('monhoc.themmon');
    }
    public function luumon(Request $request)
    {
       // Khoa::create($request->all());
        $mh = new Monhoc;
        $mh->ma_mon=$request->txtma_mon;
        $mh->ten_mon=$request->txtten_mon;
        $mh->tin_chi=$request->txttin_chi;
        $mh->save();
        return redirect()-> route('thongtinmon')->with('thongbao','Thêm Môn Thành Công');               
       
 
}
public function suamon($id)
{
  $data = DB::table('monhocs')->where('id', $id)->first();
  return view('monhoc.suamon', compact('data')); 
      
}
public function xoamon($id)
   {
       DB::table('monhocs')->where('id',$id)->delete();
       return redirect()->route('thongtinmon')->with('thongbao','Xóa Môn Học thành công');
   }
   public function capnhatmon($id,Request $request)
     {
        DB::table('monhocs')->where('id',$id)->update([
          'ma_mon'=>$request->txtma_mon,
          'ten_mon'=>$request->txtten_mon,
          'tin_chi'=>$request->txttin_chi,
        ]);
        return redirect()->route('thongtinmon')->with('thongbao','Cập nhật Môn Học thành công');
     }
}


