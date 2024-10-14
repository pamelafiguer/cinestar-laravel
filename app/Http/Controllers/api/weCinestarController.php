<?php


namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class weCinestarController extends Controller
{
    public function index() {
        return view('index');
    }

    public function cines() {
        $cines = DB::select('Call sp_getCines');
        return view('cines', ['cines' => $cines]);
    }

    public function cine(string $RazonSocial) {
        $cine = DB::select('SELECT id FROM Cine WHERE RazonSocial = ?', [$RazonSocial]);
        $cineId = $cine[0]->id;

        $cineData = DB::select('call sp_getCine(?)', [$cineId]);
        $tarifas = DB::select('call sp_getCineTarifas(?)', [$cineId]);
        $Horarios = DB::select('call sp_getCinePeliculas(?)', [$cineId]);

        return view('cine', ['cineData' => $cineData,'tarifas' => $tarifas, 'Horarios' => $Horarios]);
    }

    public function peliculas($id) {
        if ($id == 'cartelera') $id = 1 ;
        else if ($id == 'estrenos') $id = 2;
        else return redirect('/');

        $peliculas = DB::select('call sp_getPeliculas(?)', [$id]);
        return view('peliculas', ['peliculas' => $peliculas]);

    }

    public function pelicula(string $NombrePelicula) {
        
        $Pelicula = DB::select('SELECT id FROM Pelicula WHERE Titulo = ?', [$NombrePelicula]);
        $peliculaID = $Pelicula[0]->id;

        $Datapelicula = DB::select('call sp_getPelicula(?)', [$peliculaID]);

        return view('pelicula', ['Datapelicula' => $Datapelicula]);
    
    }
}
