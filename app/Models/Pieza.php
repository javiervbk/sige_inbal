<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pieza extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $incrementing = false;
    protected $dates = ['deleted_at'];
    protected $primaryKey='Numero_de_inventario';
}
