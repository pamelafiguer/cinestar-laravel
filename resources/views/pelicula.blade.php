@extends('index')

@section('contenido_interno')

@foreach ($Datapelicula as $Datapelicula)

<div class="contenido-pelicula">
	<div class="datos-pelicula">
		<h2>{{ $Datapelicula->Titulo }}</h2>
		<p>{{ $Datapelicula->Sinopsis}}</p>
		<br/>
		<div class="tabla">
			<div class="fila">
				<div class="celda-titulo">Título Original :</div>
				<div class="celda">{{$Datapelicula->Titulo}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Estreno :</div>
				<div class="celda">{{$Datapelicula->FechaEstrenoss}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Género :</div>
				<div class="celda">{{$Datapelicula->Geneross}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Director :</div>
				<div class="celda">{{$Datapelicula->Director}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Reparto :</div>
				<div class="celda">{{$Datapelicula->Reparto}}</div>
			</div>
		</div>
	</div>
	<img src="{{ asset('img/pelicula/' .$Datapelicula->id. '.jpg') }}" width="160" height="226"><br/><br/>
</div>
<div class="pelicula-video">
	<embed src="https://www.youtube.com/v/{{ $Datapelicula->Link }}" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="580" height="400">
</div>
    
@endforeach
    
@endsection