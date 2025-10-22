<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Estagiario extends Model
{
    use HasFactory;
    protected $table = 'estagiarios';
    protected $fillable = [
        'nome_completo',
        'curso',
        'ano',
        'email',
        'telefone',
        'supervisor',
        'alocacao',
        'data_inicio',
        'data_fim',
        'observacoes'
    ];
}