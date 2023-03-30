<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'name', 'brand', 'harga', 'kategori_id', 'img_name1', 'img_name2', 'img_name3', 'img_name4', 'desc', 'publised_at', 'spec'
    ];
    protected $hidden = [
        'id',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
