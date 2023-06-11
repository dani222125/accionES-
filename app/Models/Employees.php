<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = 'empleados';

    //Llave primaria
    protected $primaryKey  = 'codigo';

    //Campos de asignacion 
    protected $fillable = ['nombre'];
}
