<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'user_id',
        'owner_name',
        'phone',
        'address',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
