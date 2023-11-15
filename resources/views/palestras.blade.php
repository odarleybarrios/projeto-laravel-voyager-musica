@extends('layouts.app')

@section('conteudo')

<h1>Palestras</h1>

<section class="d-flex justify-content-center">
    @foreach ($postagens as $post)
        @include('componentes.card')
    @endforeach
</section>


@endsection
