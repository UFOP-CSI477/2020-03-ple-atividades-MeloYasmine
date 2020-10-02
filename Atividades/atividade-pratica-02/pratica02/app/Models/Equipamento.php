<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    //traits 'múltiplas heranças'
    use HasFactory;

    protected $fillable = ['nome'];

    //Um equipamento tem muitas manutenções
    public function registros(){
        return $this->hasMany(Registro::class);
    }

  
}
