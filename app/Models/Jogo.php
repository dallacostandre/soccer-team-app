<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $table = 'jogos';

    protected $fillable = [
        'key',
        'data',
        'horario',
        'duracao',
        'tipo_campo',
        'valor',
        'goleiro_de_aluguel',
        'valor_goleiro_de_aluguel',
        'local',
        'endereco',
        'frequencia',
    ];
}
