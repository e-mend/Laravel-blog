@extends('layouts.main')

@section('title', 'Notícia')

@section('content')

    @if($id == 1)
    <P> EXIBINDO A NOTICIAS DE ID: {{$id}} <p>
    @else
    <P> PAGINA INDISPONÍVEL <p>
    @endif
@endsection