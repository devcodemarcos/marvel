<?php

namespace App\Http\Controllers;

use App\Marvel;
use App\Inventario;

class ComicController extends Controller
{
    public function obtener_comics()
    {
        $marvel = new Marvel;
        $comics = $marvel->comics();
        return view('comics.comics', compact('comics'));
    }

    public function comic_by_id($id)
    {
        $marvel = new Marvel;
        $inventario = new Inventario;

        $inventario = $inventario::where('comic_id', $id)->first();
        $comic = $marvel->comic_by_id($id);
        $personajes = array();

        if ($comic->characters->returned > 0) {
            foreach ($comic->characters->items as $key => $character) {
                $personajes[] = $marvel->character($character->resourceURI);
            }
        }

        return view('comics.comic', compact('comic', 'personajes', 'inventario'));
    }
}
