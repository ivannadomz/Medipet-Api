<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'birthdate',
        'license_number',
        'speciality',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function citas()
    {
        return $this->hasMany(Cita::class, 'veterinario_id');
    }
    //
}
