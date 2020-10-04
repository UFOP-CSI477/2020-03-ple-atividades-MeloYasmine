<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = ['pessoa_id', 'coleta_id', 'data'];



    public function coleta(){
        
        return $this->hasOne('App\Models\Coleta', 'id', 'coleta_id');
    }

    public function pessoa(){
        
        return $this->hasOne('App\Models\Pessoa', 'id', 'pessoa_id');
    }
}
