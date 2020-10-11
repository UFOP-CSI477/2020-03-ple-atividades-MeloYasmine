<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'artista', 'album', 'genero_id', 'ano', 'caminho'];

    public function genero(){    
            
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }
}
