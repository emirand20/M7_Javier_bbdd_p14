<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'nom',
        'descripcio',
        'preu_compra',
        'pre_venda',
        'enviament_domicili',
        'stock',
        'observations'
    ];
    protected $hidden = [];
}
