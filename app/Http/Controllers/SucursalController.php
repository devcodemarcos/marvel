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

    public function registro_form()
    {
        return view('sucursal.registro');
    }

    public function registro(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'horario' => 'required',
            'telefono' => 'nullable|min:10|numeric'
        ]);

        $sucursal = new Sucursal;
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->horario = $request->horario;
        $sucursal->telefono = $request->telefono;
        $sucursal->save();

        return redirect()->route('registro')->with('status', 'Sucursal registrada correctamente');
    }

    public function editar_form(Sucursal $sucursal)
    {
        return view('sucursal.editar', compact('sucursal'));
    }

    public function editar(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'horario' => 'required',
            'telefono' => 'nullable|min:10|numeric'
        ]);

        $sucursal = Sucursal::find($request->id);
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->horario = $request->horario;
        $sucursal->telefono = $request->telefono;
        $sucursal->save();

        return redirect()->route('edita_sucursal', ['sucursal' => $request->id])->with('status', 'Datos de sucursal modificados correctamente');
    }

    public function eliminar(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('inicio')->with('status', 'Sucursal eliminada correctamente');
    }
}
