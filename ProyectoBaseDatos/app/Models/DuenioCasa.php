<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuenioCasa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre',
    'primerApellido',
    'segundoApellido',
    'direccionCasa',
    'nroCasa'];

    protected $table = 'duenio_casas';

}
