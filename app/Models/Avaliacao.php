<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Avaliacao extends Model
{
  protected $table = 'avaliacoes';
  
  public function save(array $options = [])
  {
      // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
      if (!$this->usuario_id && Auth::user()) {
          $this->usuario_id = Auth::user()->getKey();
      }

      return parent::save();
  }

  public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }

    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'playlist_id', 'id');
    }

}
