<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Artista extends Model
{
    public function musicas()
    {
        return $this->hasMany(Musica::class, 'artista_id', 'id');
    }
}
