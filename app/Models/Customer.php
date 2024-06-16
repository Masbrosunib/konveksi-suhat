<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'CustomerID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'CustomerID', 'Nama', 'Email', 'Phone', 'Address', 'Password'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'CustomerID', 'CustomerID');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'CustomerID', 'CustomerID');
    }
}
