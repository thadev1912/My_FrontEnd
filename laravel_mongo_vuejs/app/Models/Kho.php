<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Kho extends Eloquent
{
    use HasFactory;
     protected $connection="mongodb"; // cai nay khong phai ten database ma la ten connection do nha
     protected $collection="kho";
     protected $fillable=[
        'ma_kho',
        'ten_kho',     
        'lienhe',
        'diachi',
        'sdt',
        'quanly',
        'ghichu',
    ];
    public function getnhanvien()
    {
        return $this->belongsTo(Nhanvien::class,'ma_nhanvien','ma_nhanvien');

    }
}
