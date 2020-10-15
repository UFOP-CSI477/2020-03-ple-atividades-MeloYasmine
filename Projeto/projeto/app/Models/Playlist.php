<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'user_id', 'musica_id'];

    public function musica(){
        return $this->hasOne(Musica::class);
    }
}
