<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindatxanh extends Model
{
    use HasFactory;
    protected $table='tindatxanh';
    protected $filltable= [
              'title',
               'noidung',
               'hinhanh',      
       
    ];
}
