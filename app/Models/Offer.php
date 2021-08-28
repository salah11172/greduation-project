<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'details',
        'description',
        "image",
        'quantity',
        'price',
        'newprice',
        "categort_id",
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,"categort_id");
    }
}
