<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poster extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters)
    {
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%');
                        // ->orWhere('', 'like', '%' . $search . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
