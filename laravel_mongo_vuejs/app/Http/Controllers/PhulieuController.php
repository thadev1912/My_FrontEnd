<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phulieu;
class PhulieuController extends Controller
{
    public function phulieu()
      {
        $data=phulieu::all();
        dd($data);
      }
}
