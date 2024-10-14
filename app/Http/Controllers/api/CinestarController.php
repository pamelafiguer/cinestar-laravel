<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class CinestarController extends Controller
{

    protected function json($data)
    {
        $success = count($data) > 0; 
        $data = $success ? $data : null; 
        $message = $success ? "Registros encontrados" : "Registros no encontrados"; 

        return [
            'success' => $success,
            'data' => $data,
            'message' => $message
        ];
    }
    public function cines() {
        $cines = DB::select('call sp_getCines');

        
        return response()-> json($this->json($cines));
    }

    public function cine($id) {
        $cine = DB::select(('call sp_getCine(?)'), [$id] );
        $Horarios = DB::select(('call sp_getCinePeliculas(?)'), [$id] );
        $tarifas = DB::select(('call sp_getCineTarifas(?)'), [$id] );
        

        return response()-> json($this->json($cine, $Horarios, $tarifas));
    }

    public function peliculas($id) {
        if ($id == 1) {
            $peliculas = DB::select(('call sp_getPeliculas(?)'),[$id] );
            
        }
        
        if ($id == 2) {
            $peliculas = DB::select(('call sp_getPeliculas(?)'),[$id] );
            
        }
        return response()-> json($this->json($peliculas));
    }

    public function pelicula($id) {
        $pelicula = DB::select('call sp_getPelicula(?)', [$id]);
        
        return response() -> json($this->json($pelicula));
    }
    
}
