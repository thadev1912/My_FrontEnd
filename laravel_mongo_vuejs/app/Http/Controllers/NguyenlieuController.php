<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nguyenlieu;
class NguyenlieuController extends Controller
{
     public function nguyenlieu()
      {
        $data=nguyenlieu::all();
       return $data;
      }
}
