<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Playlist extends Model
{
   public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->usuario_id && Auth::user()) {
            $this->usuario_id = Auth::user()->getKey();
        }

        return parent::save();
    }
        public function musicas()
        {
            return $this->belongsToMany(Musica::class,'musica_playlist','musica_id','id')
            ->orderBy('created_at', 'DESC');
        }

}
