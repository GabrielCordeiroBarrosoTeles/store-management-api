<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    protected $table = 'estoques';

    protected $fillable = [
        'imagem',
        'nome',
        'funcao',
        'detalhe',
        'valorcompra',
        'valorvenda',
        'quantidade',
        'vendido',
        'marca',
        'peso'
    ];

    protected $casts = [
        'quantidade' => 'integer',
        'vendido' => 'integer'
    ];
}