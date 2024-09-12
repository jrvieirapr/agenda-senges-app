<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    //Listar os campos que o Model vai trabalhar
    //Serve tambem para criação em massa de dados
    protected $fillable = ['data','descricao','inicio', 'final',
    'contato','realizado'];

    // Relacionamentos
    //Policies
}
