<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['kategori'];

    protected $fillable = [
        'name', 'slug' , 'brand', 'harga', 'kategori_id', 'img_name1', 'img_name2', 'img_name3', 'img_name4', 'desc', 'publised_at', 'spec'
    ];
    protected $hidden = [
        'id',
    ];

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search-produk'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%'.$search.'%');
        });

        $query->when($filters['kategori'] ?? false, function($query, $kategori){
            return $query->whereHas('kategori', function($query) use ($kategori){
                $query->where('id', $kategori);
            });
        });

    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function getRouteKeyName(): string {
        return 'slug';
    }
}
