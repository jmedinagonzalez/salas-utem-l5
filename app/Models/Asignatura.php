<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

	protected $table = 'asignaturas';
	protected $fillable = ['codigo', 'nombre', 'descripcion', 'departamento_id'];
	protected $guarded = ['id'];

	public function departamento()
    {
        return $this->belongsTo('Departamento');
    }

}
