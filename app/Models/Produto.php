<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'categoria',
        'prazo_validade',
        'cor',
        'textura',
        'peso',
        'aplicacao'
    ];
    
    use HasFactory;
}
