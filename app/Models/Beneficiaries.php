<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiaries extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = 'beneficiarios';

    //Llave primaria
    protected $primaryKey = 'codigo';

    //Campos de asignacion 
    protected $fillable = ['nombre', 'apellido', 'edad', 'telefono'];
}
