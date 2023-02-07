<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    //protected $table='sinhvien';
    protected $filltable= [
        'masv',
         'tensv',
         'gioitinh',
         'pban',
         'noisinh',
        
    ];
}
