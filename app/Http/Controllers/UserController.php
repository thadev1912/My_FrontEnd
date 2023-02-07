<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Auth;
class UserController extends Controller
{
    // tạo session start
    public function session()
    {
        @session_start();
    }
    public function xulydangky(Request $request)
        
    {                
     
   $user = new User;
   $user->name=$request->name;
   $user->email=$request->email;
   $user->password=bcrypt($request->password);
   $user->level=$request->level;
   $user->save();
   
       
    }
     public function xulydangnhap(Request $request)
     
     {
       $username=$request->input('username');
       $password=$request->input('pass');
       if(Auth::attempt([
            'name'=>$username,
             'password'=>$password,
       ]))
       {
      $user=  User::where('name',$username)->first();
        Auth::login($user);
        return redirect()->route('quanlybaiviet');
        
       }
       return redirect()->route('dangnhap')->with('thongbao','Vui lòng kiểm tra lại tài khoản hoặc mật khẩu');
       
     }
     public function thoat()
     {
       Auth::logout();
       return redirect()->route('index');
     }


    

}
