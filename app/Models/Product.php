<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasApiTokens, HasFactory;

protected $fillable=[
    'name',
    'slug',
    'description',
    'price',
    'image',
    'userid',
];

    /**
     * Relationship with User
     */
    public function User(){
        return $this->belongsTo(User::class);
    }

}
