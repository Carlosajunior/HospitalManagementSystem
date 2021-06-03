<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $table = 'medicamento';
    public $timestamps = false;
    protected $fillable = [
        'lote',
        'quantidade',
        'nome', // Estava escrito senha;
        'id_baixaMedicamento'
    ];
}
