@extends('layouts.app')

@section('conteudo')

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
