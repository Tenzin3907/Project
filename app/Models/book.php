<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'book';
    protected $filltable = ['brand','types', 'description','dzongkhag','image1','image2','image3','image4','name','number'];
}

