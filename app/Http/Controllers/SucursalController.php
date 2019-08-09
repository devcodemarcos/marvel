<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
use App\Marvel;

class SucursalController extends Controller
{
    public function obtener_sucursales()
    {
        $sucursales = Sucursal::all();
        return view('sucursal.sucursales', compact('sucursales'));
    }

    public function obtener_comics_sucursal($id)
    {
        $marvel = new Marvel;
        $sucursal = Sucursal::find($id);
        
        $data = array();
        foreach ($sucursal->inventario as $key => $comic) {
            $data[] = $marvel->comic_by_id($comic->comic_id);
        }
        
        return view('sucursal.comics', compact('sucursal', 'data'));
    }

    public function test()
    {
        $marvel = new Marvel;
        $data = $marvel->comics();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
