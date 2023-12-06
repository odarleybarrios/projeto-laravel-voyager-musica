<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    protected $table = 'albuns';

    public function artista()
    {
        return $this->belongsTo(Artista::class, 'artista_id', 'id');
    }
}
