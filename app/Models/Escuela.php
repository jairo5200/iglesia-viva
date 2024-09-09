<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;

    /**
     * Atributos que seran asignables en masa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'horario',
        'fecha_inicio',
        'fecha_fin',
        'paga_inscripcion',
        'paga_grado',
        'nota_final',
        'diploma',
        'fiel_id',
    ];

    //funcion que nos permite interactuar con el Fiel de la escuela
    public function Fiel(){
        return $this->hasOne(Fiel::class, 'id', 'fiel_id');
    }


}
