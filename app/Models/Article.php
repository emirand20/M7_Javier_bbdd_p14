<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio-de-compra',
        'país',
        'divisa',
        'stock',
        'observaciones'
    ];
    protected $hidden = [];
}
