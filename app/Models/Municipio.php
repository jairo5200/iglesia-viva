<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    /**
     * Atributos que seran asignables en masa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'departamento_id'
    ];

    //funcion que nos permite interactuar con el Departamento del Municipio
    public function Departamento(){
        return $this->hasOne(Departamento::class, 'id', 'departamento_id');
    }
}
