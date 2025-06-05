<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'veterinario_id',
        'appointment_date',
        'status',
        'reason',
    ];

    public function veterinario()
    {
        return $this->belongsTo(Veterinario::class, 'veterinario_id');
    }
    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'mascota_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branches::class, 'branch_id');
    }

    //
}
