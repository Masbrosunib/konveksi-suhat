<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'ProductID', 
        'OrnamentID', 
        'material', 
        'productName', 
        'price_per_piece'
    ];

    // public function ornament()
    // {
    //     return $this->belongsTo(Ornament::class, 'OrnamentID', 'OrnamentID');
    // }

    // public function orders()
    // {
    //     return $this->hasMany(Order::class, 'ProductID', 'ProductID');
    // }

    // public function cart()
    // {
    //     return $this->hasMany(Cart::class, 'ProductID', 'ProductID');
    // }
}
