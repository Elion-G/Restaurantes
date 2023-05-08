<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index(){
        $Carnes = DB::select('SELECT m.nombre, foto, c.nombre AS categoria 
                            FROM restaurante.menu m 
                            LEFT JOIN restaurante.categorias c 
                            ON m.id_categoria = c.id
                            WHERE m.id_categoria = 1');
        $Guarnisiones = DB::select('SELECT m.nombre, foto, c.nombre AS categoria 
                            FROM restaurante.menu m 
                            LEFT JOIN restaurante.categorias c 
                            ON m.id_categoria = c.id
                            WHERE m.id_categoria = 2');
        $Ensaladas = DB::select('SELECT m.nombre, foto, c.nombre AS categoria 
                            FROM restaurante.menu m 
                            LEFT JOIN restaurante.categorias c 
                            ON m.id_categoria = c.id
                            WHERE m.id_categoria = 3');
        $Jugos = DB::select('SELECT m.nombre, foto, c.nombre AS categoria 
                            FROM restaurante.menu m 
                            LEFT JOIN restaurante.categorias c 
                            ON m.id_categoria = c.id
                            WHERE m.id_categoria = 4');

        return view('welcome', 
        [
            'Carnes' => $Carnes,
            'Guarnisiones' => $Guarnisiones,
            'Ensaladas' => $Ensaladas,
            'Jugos' => $Jugos
        ]);
    }
}
