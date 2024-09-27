<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascotas1 extends Model
{
    use HasFactory;

    // Especificar la tabla si no sigue la convención

    // Especificar los campos que se pueden llenar (mass assignable)
    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'edad',
    ];

    // Si es necesario, puedes definir relaciones aquí
    // Ejemplo: si tienes otra tabla que se relaciona con Mascota
    // public function owner()
    // {
    //     return $this->belongsTo(Owner::class);
    // }
}
