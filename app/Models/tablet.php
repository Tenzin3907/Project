<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablet extends Model
{
    protected $table = 'tablet';
    protected $filltable = ['brand','price','description','dzongkhag','image1','image2','image3','image4','name','number'];
}

