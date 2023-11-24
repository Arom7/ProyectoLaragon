<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    use HasFactory;

    protected $table = 'duenio_casas';

    public function recibos(){
        return $this->hasMany(Recibo::class);
    }
}
