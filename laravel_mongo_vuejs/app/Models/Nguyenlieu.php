<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Nguyenlieu extends Eloquent
{
     use HasFactory;
    protected $connection="mongodb"; // cai nay khong phai ten database ma la ten connection do nha
    protected $collection="nguyenlieu";
    protected $fillable=[
        'ma_nguyenlieu',
        'loai_nguyenlieu',     
        'ten_nguyenlieu',
       
    ];

}
