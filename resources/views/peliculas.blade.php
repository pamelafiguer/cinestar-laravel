@extends('index')

@section('contenido_interno')

    <br/><h1>Cartelera</h1><br/>

    @foreach ($peliculas as $peliculas)

    <div class="contenido-pelicula">
        <div class="datos-pelicula">
            <h2>{{ $peliculas->Titulo }}</h2><br/>
            <p>{{ $peliculas->Sinopsis}}</p>
            <br/>
                <div class="boton-pelicula"> 
                    <a href="{{ route( 'pelicula', ['NombrePelicula' => $peliculas->Titulo] ) }}" >
                        <img src="{{ asset('img/varios/btn-mas-info.jpg') }}" width="120" height="30" alt="Ver info"/>
                    </a>
                </div>
                <div class="boton-pelicula"> 
                    <a href="https://www.youtube.com/v/{{ $peliculas->Link}}" target=_blank  onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )" >
                        <img src="{{ asset('img/varios/btn-trailer.jpg') }}" width="120" height="30" alt="Ver trailer"/>
                    </a>
            </div> 
        </div>
        <img src="{{  asset('img/pelicula/' .$peliculas->id. '.jpg') }}" width="160" height="226"/><br/><br/>
    </div>
        
    @endforeach



@endsection