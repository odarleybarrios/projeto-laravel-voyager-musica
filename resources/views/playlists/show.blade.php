@extends('layouts.app')

@section('conteudo')

<h1 class="display-3">{{ $playlist->nome }}</h1>

<ul class="list-group">
    @forelse ($playlist->musicas as $musica)
      <li class="list-group-link">
        <a href="{{route('musicas.show',['id'=>$musica->id])}}" class="nav-link">
            {{$musica->titulo}}
        </a>
      </li>
    @empty
      <li class="list-group-list">Nenhuma música encontrada</li>
    @endforelse
</ul>

@endsection