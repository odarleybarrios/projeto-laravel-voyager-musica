@extends('layouts.app')

@section('conteudo')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form  class="d-flex" role="search" action="{{ route('welcome') }}">
          <input name="nome" class="form-control me-2" type="search"
           placeholder="Nome do artista" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid
            fa-magnifying-glass"></i>
         </button>
        </form>
      </div>
    </div>
  </nav>

<h1 class="text-center my-3" >Artistas</h1>

@forelse ($artistas as $artista)

<div class="card" style="width: 18rem;">
  <img src="{{Voyager::image($artista->imagem)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$artista->nome}}</h5>
    <p class="card-text"></p>
    <a href="{{ route('artista.show',['id'=> $artista->id]) }}" class="btn btn-primary">Visualizar</a>
  </div>
</div>
@empty
<p class="alert alert-info">Nenhum artista encontrado.</p>

@endforelse

@endsection
