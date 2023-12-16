@extends('layouts.app')

@section('conteudo')

<h1 class="display-3">Playlists</h1>
<ul class="list-group">
    @forelse ($playlists as $playlist)
      <li class="list-group-item">
        <a href="{{route('playlists.show',['id'=>$playlist->id])}}" class="nav-link">

            {{$playlist->nome}}

        </a>
      </li>

    @empty

    @endforelse
</ul>

@endsection
