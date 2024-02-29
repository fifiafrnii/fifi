<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'stock',
    ];
    public function orders()
    {
        return $this->belongsToMany(order::class);
    }
    public function cart()
    {
        return $this->hasMany(cart::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}