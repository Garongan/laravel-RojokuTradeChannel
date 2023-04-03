<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BisnisClass extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName(): string {
        return 'slug';
    }

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search-bisnis-class'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%'.$search.'%');
        });

    }
}
