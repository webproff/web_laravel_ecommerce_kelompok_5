<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = [
        'poster_id',
        'name',
        'price',
        'quantity',
    ];
}
