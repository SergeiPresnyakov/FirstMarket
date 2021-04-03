<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'brand',
        'model',
        'description',
        'price',
        'image'
    ];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
