<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sofa extends Model
{
    protected $table = 'sofa';
    protected $filltable = ['title','price','description','dzongkhag','image1','image2','image3','image4','name','number'];
}

