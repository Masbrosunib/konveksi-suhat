<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $primaryKey = 'AdminID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'adminID', 
        'nama', 
        'Email', 
        'Phone', 
        'Address', 
        'Password'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'AdminID', 'AdminID');
    }
}
