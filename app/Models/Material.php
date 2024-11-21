<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';

    protected $fillable =[
        'descripcion',
        'unidad',
        'cantidad',
        'precio',
    ];
}