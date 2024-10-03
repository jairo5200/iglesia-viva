<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

     /**
     * Atributos que seran asignables en masa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ubicacion',
        'user_id',
        'fecha',
        'total_adultos',
        'adultos_nuevos',
        'adultos_asistentes',
        'discipulos',
        'escuelas',
        'visitas',
        'total_ninos',
        'ninos_nuevos',
        'hermanos_planeando',
        'ofrenda',
        'actividad',
        'actividad_proyectada',
        'fecha_actividad_proyectada',
        'solicitud',
    ];

    //funcion que nos permite interactuar con el Lider que creo el informe
    public function User(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
