<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhamau extends Model
{
    use HasFactory;
    protected $table='nhamau';
    protected $filltable= [
              'chitiet',
               'nhamau',
                  
       
    ];
}
