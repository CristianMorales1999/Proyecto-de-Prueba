@extends('layout')

@section('title','Servicio')

@section('content')
    <h2>Servicios</h2>
    <ul>
        @if($servicios)
            @foreach($servicios as $servicio)
                <li>{{$servicio['titulo']}}</li>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar.</li>
        @endif
    </ul>
@endsection