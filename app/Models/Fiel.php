<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiel extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'iglesia_id'
    ];
}
