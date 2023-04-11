@extends('layouts.main')

@section('title', 'Menu Principal')

@section('content')


    @if($busca != '')

        
            <p>O USUÁRIO ESTÁ PROCURANDO POR: {{ $busca }}<p>
        

    @endif
    {{--COMENTÁRIO--}}


@endsection