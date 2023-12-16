@extends('layouts.app')

@section('conteudo')

<main class="container">

    <h1 class="display-3 mt-5">{{$musica->titulo}}</h1>
    <h2 class="badge bg-secondy">{{$musica->artista->nome}}</h2>
    @isset($musica->youtube)
     <p><a href="{{$musica->youtube}}" class="btn btn-danger" taget="_blank">
        <i class="fa-brands fa-youtube"></i>
        Assista no youtube
     </a>
    </p>
    @endisset
      <h2 class="display-5">Letra</h2>
    <p>
        {!! $musica->letra !!}
    </p>

</main>

@endsection
