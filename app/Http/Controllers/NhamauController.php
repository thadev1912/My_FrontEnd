<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NhamauController extends Controller
{
    function nhamau()
    {
        $nhamau = DB::table('nhamau')->paginate(12); 
        return view('nhamau.nhamau',compact('nhamau'));
    }

}
