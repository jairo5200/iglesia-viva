<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iglesia extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'municipio_id'
    ];

    public function Municipio(){
        return $this->hasOne(Municipio::class, 'id', 'municipio_id');
    }


}
