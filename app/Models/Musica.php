<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Musica extends Model
{
    public function artista()
    {
        return $this->belongsTo(Artista::class, 'artista_id', 'id');
    }

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id', 'id');
    }
}
