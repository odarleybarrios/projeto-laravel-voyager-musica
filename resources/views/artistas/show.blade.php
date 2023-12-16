@extends('layouts.app')

@section('conteudo')

<main class="container">

<h1 class="mt-3 display-3">{{$artista->nome}}</h1>
<ul class="list-group">

 @forelse ($artista->musicas as $musica)
  <li class="list-group-item">
    <a href="{{route('musicas.show',['id'=>$musica->id]) }}" class="nav-link">
        {{$musica->titulo}}
    </a>
    </li>

 @empty
  <li class="list-group-item">Nenhuma música encontrada</li>
</main>

 @endforelse
</ul>
@endsection

