<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = '_product';
    protected $filltable = ['PName', 'Price', 'Discription', 'Image','Image1','Image2','Image3'];
}
