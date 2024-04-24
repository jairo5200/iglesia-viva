<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'pais_id'
    ];


    public function Pais(){
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }
}
