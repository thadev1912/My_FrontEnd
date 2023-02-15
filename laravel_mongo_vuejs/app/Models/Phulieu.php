<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Phulieu extends Eloquent
{
     use HasFactory;
    protected $connection="mongodb";
    protected $collection="phulieu";
    protected $fillable=[
        'ma_phulieu',
        'loai_phulieu',     
        'ten_phulieu',
       
    ];

}
