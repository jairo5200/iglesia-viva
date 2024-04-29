<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiel extends Model
{
    use HasFactory;


    /**
     * atributos que seran asignables en masa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_documento',
        'name',
        'fecha_de_nacimiento',
        'telefono',
        'direccion',
        'fecha_de_ingreso',
        'cargo',
        'escuela_actual',
        'imagen',
        'iglesia_id'
    ];

    //funcion que nos permite interactuar con la Iglesia del Fiel
    public function Iglesia(){
        return $this->hasOne(Iglesia::class, 'id', 'iglesia_id');
    }
}
