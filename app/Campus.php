<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model {
    protected $fillable = ['nombre', 'direccion', 'latitud', 'longitud', 'descripcion', 'rut_encargado'];
    protected $table = 'campus';
}
