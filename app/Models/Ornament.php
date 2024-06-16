<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ornament extends Model
{
    use HasFactory;

    protected $table = 'ornaments';
    protected $primaryKey = 'OrnamentID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'OrnamentID', 'ornamentName', 'material', 'price'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'OrnamentID', 'OrnamentID');
    }
}
