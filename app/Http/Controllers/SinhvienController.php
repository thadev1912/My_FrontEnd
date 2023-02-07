<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Models\Sinhvien;
use Illuminate\Http\Request;
use DB;

class SinhvienController extends Controller
{
    /*
    nghiên cứu sau hek
    public function index1()
    {
      $sinhvien = Sinhvien::all();
        return view('index',compact('sinhvien'));
    }
     */
    public function index()
        {
             // $sinhvien = DB::table('sinhviens')->get(); có thể dùng cách này
              $sinhvien=Sinhvien::paginate(3);
	          	return view('sinhvien.sinhvien',compact('sinhvien'))->with('i',(request()->input('page',1)-1)*3);
        }
     
    
    public function create()
        {
               return view('sinhvien.themsinhvien');
        }
 
  
        public function store(Request $request)
        
          {                
           
         $sv = new SinhVien;
         $sv->masv=$request->txtMa;
         $sv->tensv=$request->txtTen;
         $sv->gioitinh=$request->txtgioitinh;
         $sv->pban=$request->txtpb;
         $sv->noisinh=$request->txtns;
         $sv->save();
         return redirect()->route('index')->with('thongbao','Thêm sinh viên thành công');
                      
          }
          public function edit($id)
          {
            $data = DB::table('sinhviens')->where('id', $id)->first();
            return view('sinhvien.editsinhvien', compact('data')); 
                
          }
          public function update($id,Request $request)
          {
               DB::table('sinhviens')->where('id',$id)->update([
              'masv' => $request->txtMa,
              'tensv' => $request->txtTen,
              'gioitinh' => $request->txtgioitinh,
              'pban' => $request->txtpban,
              'noisinh' => $request->txtns,
              
              ]);
            
            return redirect()->route('index')->with('thongbao','Cập nhật sinh viên thành công');
          }
          
          public function delete($id)
          {
            DB::table('sinhviens')->where('id', $id)->delete();
            return redirect()->route('index')->with('thongbao','Xóa sinh viên thành công');
                // return view('deleted');
          }
          public function submenu()
          {
                 return view('hide');
          }
     
  
        public function trangchinh()
        {
             // $sinhvien = DB::table('sinhviens')->get(); có thể dùng cách này
              $sinhvien=Sinhvien::paginate(3);
	          	return view('trangchinh',compact('sinhvien'))->with('i',(request()->input('page',1)-1)*3);
        }
}

