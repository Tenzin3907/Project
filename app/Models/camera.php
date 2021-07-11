<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camera extends Model
{
    protected $table = 'camera';
    protected $filltable = ['brand','price','description','dzongkhag','image1','image2','image3','image4','name','number'];
}
