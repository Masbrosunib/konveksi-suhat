<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ornament extends Model
{
    use HasFactory;

    protected $primaryKey = 'ornament_id';

    protected $fillable = [
        'ornament_name',
        'ornament_description',
        'ornament_price',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'ornament_id', 'ornament_id');
    }
}
