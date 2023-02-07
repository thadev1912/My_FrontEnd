<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lienhe;
use DB;
class LienheController extends Controller
{
    function thongtinlienhe()
     {
        return view('lienhe.lienhe');
     }
     function capnhatthongtin(Request $request)
       {
         $tdx = new Lienhe;
            $tdx->hoten=$request->txt_hoten; 
            $tdx->diachi=$request->txt_diachi; 
            $tdx->tieude=$request->txt_tieude;   
            $tdx->noidung=$request->txt_noidung;
            $tdx->dienthoai=$request->txt_sdt;
            $tdx->save();
           if($tdx)
           {
            echo "<script>
            		alert('Khách hàng đã gửi thông tin thành công!!!');
            	</script>";
           }
         
           return view('lienhe.lienhe');
       }
     
}
