<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Nhanvien extends Eloquent
{
    use HasFactory;
   protected $connection='mongodb';
   protected $collection='nhanvien';
   protected $fillable=
   [
    'ma_nhanvien',
    'ten_nhanvien',
    'gioitinh',
    'diachi',
    'sdt',
   ];
}
