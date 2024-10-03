<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * Atributos que seran asignables en masa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo',
        'slug',
        'imagen',
        'descripcion',
        'activo',
        'user_id',
    ];

    //funcion que nos permite interactuar con el User del Blog
    public function User(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
