<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lienhe extends Model
{
    use HasFactory;
    protected $table='lienhe';
    protected $filltable= [
              'hoten',
               'diachi',
               'tieude',
               'noidung',
                  
       
    ];
}
