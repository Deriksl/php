<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',        // Nombre del usuario
        'last_name',   // Apellido (si es aplicable)
        'username',    // Nombre de usuario
        'email',       // Correo electrónico
        'phone',       // Teléfono
        'password',    // Contraseña
        'photo',       // Foto de perfil
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}

