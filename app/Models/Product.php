<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_image',
        'product_categories',
        'quantity',
        'ornament_id',
    ];

    public function ornament()
    {
        return $this->belongsTo(Ornament::class, 'OrnamentID', 'OrnamentID');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'product_id', 'product_id');
    }
}
