@extends('layouts.app')

@section('conteudo')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form  class="d-flex" role="search" action="{{ route('musicas') }}">
          <input name="titulo" class="form-control me-2" type="search"
           placeholder="Título da música" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid
            fa-magnifying-glass"></i>
         </button>
        </form>
      </div>
    </div>
  </nav>

  <h1 class="display-3">Músicas</h1>

  <ul class="list-group">
    @forelse ($musicas as $musica)
      <li class="list-group-item">
        <a href="{{route('musicas.show',['id'=>$musica->id])}}" class="nav-link">
         {{$musica->titulo}}</li>
        </a>
     </li>
    @empty

    <li class="list-group-item">Nenhuma música encontrada</li>

    @endforelse
  </ul>

@endsection
