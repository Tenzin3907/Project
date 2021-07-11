<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    protected $table = 'computer';
    protected $filltable = ['brand','price','description','dzongkhag','image1','image2','image3','image4','name','number','available'];
}
