<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    protected $table = 'abogados';
    protected $primaryKey = 'id_abogado';

    protected $fillable = [
        'nombre',
        'especialidad',
        'imagen_perfil',
        'descripcion',
        'estado_actual',
    ];
}
