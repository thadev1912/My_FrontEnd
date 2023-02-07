<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Illuminate\Http\Request;

use Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

  
    public function handle(Request $request, Closure $next)
    
        
        { 
          
          if(Auth::check() &&(Auth::user()->level==1))
          {
            return $next($request);
          }
          return redirect()->route('dangnhap')->with('thongbao','Bạn không có quyền truy cập trang này');
        }
      }
         
       
            
        
    
