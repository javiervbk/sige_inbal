<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Museo extends Model
{
    protected $table = 'museos';
    protected $primaryKey='Clave_de_museo';
    use HasFactory;

    public function trabajadores(){
        return $this->hasMany(User::class, 'Clave_de_museo');
    }
    public function coleccion(){
        return $this->hasMany(Pieza::class, 'Clave_de_museo');
    }
}
