<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'titulo', 'data_de_lancamento', 'diretor'
        ];
    use HasFactory;
}
