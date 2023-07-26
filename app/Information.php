<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
   protected $fillable = [
    'username',
    'phone',
    'gmail',
    'date',
    'province',
    'district',
    'commune',
    'village'
];
}
