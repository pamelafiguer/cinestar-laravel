@extends('index')

@section('contenido_interno')


@foreach ($cineData as $cineData)
<h2>{{ $cineData->RazonSocial }}</h2>
<div class="cine-info">
	<div class="cine-info datos">
		<p>{{ $cineData->Direccion}} - {{ $cineData->Distrito }}</p>
		<p>Teléfono: {{ $cineData->Telefonos }} anexo 865</p>
		<br/>
		
@endforeach

@foreach ($tarifas as $tarifas)
<div class="tabla">
	<div class="fila">
		<div class="celda-titulo">{{ $tarifas->DiasSemana }}</div>
		<div class="celda">{{ $tarifas->Precio }}</div>
	</div>
</div>
@endforeach

<div class="aviso">
	<p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la 
		comisión de S/. 1.00 adicional al 
		tarifario vigente, a los usuarios 
		que compren sus entradas por el aplicativo de Cine 
		Papaya para Cine Star Comas, Excelsior, Las Américas, Benavides, 
		Breña, San Juan, UNI, Aviación, Sur, Porteño, 
		Tumbes y Tacna.</p>
</div>
</div>
<img src="{{ asset('img/cine/'.$cineData->id.'.2.jpg') }}"/>
<br/><br/><h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4><br/>
<div class="cine-info peliculas">
<div class="tabla">
	<div class="fila">
		<div class="celda-cabecera">Películas</div>
		<div class="celda-cabecera">Horarios</div>
	</div>

@foreach ($Horarios as $Horarios)

<div class="fila impar">
	<div class="celda-titulo">{{ $Horarios->Titulo}}</div>
	<div class="celda">{{ $Horarios->Horarios}}</div>
</div>
    
@endforeach

<div>
    <img style="float:left; margin-top : 15px;" src="{{ asset('img/cine/' .$cineData->id. '.3.jpg' ) }}" alt="Imagen del cine"/>
    <span class="tx_gris">Precios de los juegos: desde S/1.00 en todos los Cine Star.<br/>
        Horario de atención de juegos es de 12:00 m hasta las 10:30 pm. 
        <br/><br/>
        Visitános y diviértete con nosotros. 
        <br/><br/>
        <b>CINESTAR</b>, siempre pensando en tí. 
    </span>		
</div>
</div> 
</div> 

    

    
@endsection