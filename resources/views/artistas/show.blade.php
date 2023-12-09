@extends('layouts.app')

@section('conteudo')

<h1>{{$artista->nome}}</h1>
<ul>

 @forelse ($artista->musicas as $musica)
  <li>{{$musica->titulo}}</li>

 @empty
  <li>Nenhuma música encontrada</li>
  
 @endforelse
</ul>
@endsection

