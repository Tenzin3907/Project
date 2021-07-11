<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    protected $table = 'buyer';
    protected $filltable = ['brand','fristname','lastname','email','delivery','payment','number'];

}
