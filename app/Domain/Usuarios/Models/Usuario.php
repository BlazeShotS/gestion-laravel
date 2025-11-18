<?php

namespace App\Domain\Usuarios\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Nombre de la tabla opcional
    protected $table = 'usuario';
    protected $fillable = [
        'nombre',
        'email',
        'contrasena'
    ];

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';

    // Mutator para encriptar contraseña automáticamente
    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = bcrypt($value);
    }

}
