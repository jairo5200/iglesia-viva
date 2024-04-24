<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'departamento_id'
    ];


    public function Departamento(){
        return $this->hasOne(Departamento::class, 'id', 'departamento_id');
    }
}
