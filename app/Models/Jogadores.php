<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogadores extends Model
{
    use HasFactory;

    protected $table = 'jogadores'; 

    protected $fillable = [
        'name',
        'key',
    ];
}
