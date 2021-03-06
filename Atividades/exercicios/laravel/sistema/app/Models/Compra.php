<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }

    public function produtos(){
        return $this->hasMany(Produto::class);
    }

}
