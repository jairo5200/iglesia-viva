<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iglesia extends Model
{
    use HasFactory;


    /**
     * atributos que seran asignables en masa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'municipio_id'
    ];


    //funcion que nos permite interactuar con el Municipio de la Iglesia
    public function Municipio(){
        return $this->hasOne(Municipio::class, 'id', 'municipio_id');
    }


}
