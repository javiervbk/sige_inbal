<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescripcionBasica extends Model
{
    use HasFactory;
    protected $table = 'descripcion_basica';
    protected $primaryKey='Numero_de_inventario';
    public $incrementing = false;
    public $timestamps = false;
    public function pieza()
    {
        return $this->belongsTo(Pieza::class, 'Numero_de_inventario');
    }
}
