<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory; // criar caracteristica do usuario

    protected $fillable = [
        'nome', 
        'email',
        'password'
    ];
}
