<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName(): string {
        return 'slug';
    }

    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search-kategori'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%'.$search.'%');
        });

    }
}
