<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeappliance extends Model
{
    protected $table = 'homeappliance';
    protected $filltable = ['brand','price','description','dzongkhag','image1','image2','image3','image4','name','number'];
}

