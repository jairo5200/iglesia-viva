<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    /**
     * Atributos que seran asignables en masa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'pais_id'
    ];


    //funcion que nos permite interactuar con el País del Departamento
    public function Pais(){
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }
}
