<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    protected $fillable = ['nombre','apellido','dui','telefono','correo','clave'];
    protected $table ='profesor';
}
