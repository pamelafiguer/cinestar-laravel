@extends('index')

@section('contenido_interno')

<br/><h1>Nuestros Cines</h1><br/>

@foreach ($cines as $cines)

<div class="contenido-cine">
		
    <img src="{{ asset('img/cine/' .$cines->id. '.1.jpg') }}" width="227" height="170"/>
        <div class="datos-cine">
            <h4>{{ $cines->RazonSocial }} </h4><br/>
            <span>{{ $cines->Direccion }} - {{ $cines->Distrito }}<br/><br/>Teléfono: {{ $cines->Telefonos}} anexo 865</span>
        </div>
        <br/>

    <a href="{{ route( 'cine', ['RazonSocial' => $cines->RazonSocial]) }}">
        <img src="{{ asset('img/varios/ico-info2.png') }}" width="150" height="40"/> 
    </a>
</div>

    
@endforeach
    
@endsection