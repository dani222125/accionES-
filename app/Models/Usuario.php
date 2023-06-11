<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = 'beneficiario';

    //Llave primaria
    protected $primaryKey = 'codigo';

    //campos de asignacion o campos de mi tabla
    protected $fillables = ['nombre', 'apellido', 'edad'];

}
