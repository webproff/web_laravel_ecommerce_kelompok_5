<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartItem extends Model
{
    protected $fillable = [
        'poster_id',
        'title',
        'price',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\poster');
    }
}