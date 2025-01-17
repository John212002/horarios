<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'hora_inicio', 'hora_fin', 'dia', 'idSalon'];
    public function salon()
    {
        return $this->belongsTo(Salon::class, 'idSalon', 'idSalon');
    }
}
